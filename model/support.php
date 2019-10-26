<?php

class support {

    public function support(){

        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
    
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn(
            "SELECT
                COUNT(*)
            FROM `support__messages`
            INNER JOIN
                (SELECT MAX(`timestamp`) mt, `_members` mm
                FROM `support__messages`SR WHERE SR.`answer`=0
                GROUP BY mm) m
            on m.mm = `support__messages`.`_members` and m.mt = `support__messages`.`timestamp`
            INNER JOIN `members` ON `members`.`id`=`support__messages`.`_members`
            INNER JOIN `support__unread`
            ON `support__unread`.`_members`=`support__messages`.`_members`"
        );
    
        $data = db::fetchAll(
            "SELECT
                `support__messages`.*,
                `members`.`name`
            FROM `support__messages`
            INNER JOIN
                (SELECT MAX(`timestamp`) mt, `_members` mm
                FROM `support__messages`SR WHERE SR.`answer`=0
                GROUP BY mm) m
            on m.mm = `support__messages`.`_members` and m.mt = `support__messages`.`timestamp`
            INNER JOIN `members` ON `members`.`id`=`support__messages`.`_members`
            INNER JOIN `support__unread`
            ON `support__unread`.`_members`=`support__messages`.`_members`
            ORDER BY `support__messages`.`timestamp` DESC
            LIMIT ? OFFSET ?",
            [ $length, $start ]
        )? : [];
        $jdf = new jdf;
        $AM = new AllowanceManager;
        $util = new Utils;
        $WALLET = new Wallet;
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                '<pre><code>'.$data[$i]['id'].'</code><pre>',
                '<a class="btn btn-primary btn-sm" href="/admin/members/'.$data[$i]['_members'].'" target="_blank">'.$data[$i]['name'].'</a>',
                '<p>'.$data[$i]['text'].'</p>',
                '<div dir="ltr"><pre>'.str_replace(' ','<br>',$jdf->timestamp__persian( $data[$i]['timestamp'] )).'</pre></div>',
                '<small>سکه: '.'<span class="badge badge-warning">'.$AM->countAllowance( $data[$i]['_members'], 'golden' ).'</span>'.
                '<br>پول: '.'<span >'.$util->cashFormat($WALLET->getWalletTotal( $data[$i]['_members'] )).'</span>'.
                '<br>الماس: '.'<span class="badge badge-secondary">'.$AM->countAllowance( $data[$i]['_members'], 'silver' ).'</span>'.'</small>',
                '<button class="btn btn-sm btn-success" onclick="seenMessage('.$data[$i]['_members'].')"><i class="fa fa-eye"></i></button>'
            ];
    
            $ret['data'][] = $newRow;
          }
          return $ret;
        }

}