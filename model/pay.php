<?php

class pay {

    public function pay_out(){

        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
        if($searchVal==''){
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `payments__out`");
            $data = db::fetchAll(
            "SELECT 
                    `payments__out`.*,
                    `members`.`name`,
                    `members`.`cardNum`
                 FROM `payments__out`
                INNER JOIN `members` ON `payments__out`.`_members`=`members`.`id`
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [ $length, $start]
            )? : [];
        }else{
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `payments__out`");
            $data = db::fetchAll(
                "SELECT 
                        `payments__out`.*,
                        `members`.`name`,
                        `members`.`cardNum`
                     FROM `payments__out`
                    INNER JOIN `members` ON `payments__out`.`_members`=`members`.`id` WHERE `payments__out`.`id`=? or `members`.`name` like ? or  `members`.`cardNum` like ?
                    ORDER BY `id` DESC
                    LIMIT ? OFFSET ?",
                    [$searchVal,"%$searchVal%","%$searchVal%", $length, $start]
                )? : [];
        }
       
        $jdf = new jdf;
        $util = new Utils;
        $ret['data']=[];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                '<pre><code>'.$data[$i]['id'].'</code><pre>',
                '<a class="btn btn-primary btn-sm" href="/admin/members/'.$data[$i]['id'].'" target="_blank">'.$data[$i]['name'].'</a><br>'.
                "<span  data-val=\"{$data[$i]['cardNum']}\" onclick=\"copyToClipboard(this)\" class=\"cursor-pointer badge badge-dark size\">".$data[$i]['cardNum']."</span>",
                '<span>'.$util->cashFormat($data[$i]['reqValue']).'</span><br>'. 
                "<span  data-val=\"{$util->cashFormat($data[$i]['reqValue']*10)}\" onclick=\"copyToClipboard(this)\" class=\"cursor-pointer badge badge-dark size\">".$util->cashFormat($data[$i]['reqValue']*10)."R"."</span>",
                '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['reqDate'] ).'</div>',
                ($data[$i]['isPaid']==1) ?
                "<button onclick=\"loadModalPay(this,{$data[$i]['id']},{$data[$i]['isPaid']},{$data[$i]['trackingCode']})\" class=\"btn btn-sm btn-success\">پرداخت شده</button>":
                "<button onclick=\"loadModalPay(this,{$data[$i]['id']},{$data[$i]['isPaid']},{$data[$i]['trackingCode']})\" class=\"btn btn-sm btn-danger\">پرداخت نشده</button>",
                "<button class=\"btn btn-sm btn-".(($data[$i]['ignored']==0) ? 'success':'danger')."\" onclick=\"updateIgnore(this,{$data[$i]['id']},{$data[$i]['ignored']})\"><i class=\"fa fa-eye\"></i></button>",
                '<p>'.$data[$i]['trackingCode'].'</p>',
            ];
    
            $ret['data'][] = $newRow;
          }
          return $ret;
    }




    public function pay_in(){


        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
        if($searchVal==''){
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `payments__in`");
        $data = db::fetchAll(
            "SELECT `payments__in`.*,
                    `members`.`name` AS `user.name`,  
                    `shop`.`name` AS `shop.name`
                    FROM `payments__in` INNER JOIN `members` ON `payments__in`.`_members`=`members`.`id` 
                    INNER JOIN `shop` ON `payments__in`.`_shop`=`shop`.`id`
            ORDER BY `id` DESC
            LIMIT ? OFFSET ?",
            [ $length, $start]
        )? : [];

        }else{
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `payments__in` INNER JOIN `members` ON `payments__in`.`_members`=`members`.`id` 
            INNER JOIN `shop` ON `payments__in`.`_shop`=`shop`.`id`  
            WHERE `payments__in`.`id`= ? or `members`.`name` like ? or `shop`.`name` like ?",[ $searchVal,"%$searchVal%","%$searchVal%"]);
            $data = db::fetchAll(
                "SELECT `payments__in`.*,
                        `members`.`name` AS `user.name`,  
                        `shop`.`name` AS `shop.name`
                        FROM `payments__in` INNER JOIN `members` ON `payments__in`.`_members`=`members`.`id` 
                        INNER JOIN `shop` ON `payments__in`.`_shop`=`shop`.`id`  
                        WHERE `payments__in`.`id`= ? or `members`.`name` like ? or `shop`.`name` like ?
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [ $searchVal,"%$searchVal%","%$searchVal%",$length, $start]
            )? : [];
        }
    
        $jdf = new jdf;
        $util = new Utils;
        $ret['data']=[];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                '<pre><code>'.$data[$i]['id'].'</code><pre>',
                '<a class="btn btn-primary btn-sm" href="/admin/members/'.$data[$i]['id'].'" target="_blank">'.$data[$i]['user.name'].'</a>',
                '<p>'.$data[$i]['shop.name'].'</p>',
                '<p>'.$util->cashFormat($data[$i]['price']).'</p>',
                '<span dir="ltr" class="mt-1 badge badge-dark eng">'.$data[$i]['version'].' '.$data[$i]['gate'].'</span>',
                '<span class="badge badge-success eng">'.$data[$i]['gate'].'<br>
                <span class="mt-1 badge badge-dark eng">FAILED</span><br>
                <span class="mt-1 badge badge-dark eng">FAILED</span><br>
                </span>',
                '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['timestamp'] ).'</div>',
                
            ];
    
            $ret['data'][] = $newRow;
            }
            return $ret;
    }


    private function getShop( $userShop ){
        return db::fetchColumn(
            "SELECT `name` FROM `shop` WHERE `id`=?",
            [ $userShop ]
        ) ? : 0;
    }


    public function money_in($userID){
        return db::fetchColumn(
            "SELECT SUM(`price`) FROM `payments__in`
            WHERE
                `_members`=? AND `success`=1",
            [$userID]
        )?:0;
    }



    public function money_out($userID){
        return db::fetchColumn(
            "SELECT SUM(`reqValue`) FROM `payments__out`
            WHERE `_members`=? AND `isPaid`=1",
            [$userID]
        )?:0;
    }
    


    public function pay_req_user($userID){
        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `payments__out`  WHERE `_members`=? ",[ $userID]);
        $data = db::fetchAll(
            "SELECT * FROM `payments__out`
             WHERE `_members`=?
             ORDER BY `id` DESC
             LIMIT ? OFFSET ?",
             [ $userID,$length, $start]
                )? : [];
        $jdf = new jdf;
        $util = new Utils;
        $ret['data']= [];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                '<pre><code>'.$data[$i]['id'].'</code><pre>',
                '<p>'.$util->cashFormat($data[$i]['reqValue']).'</p>',
                '<div dir="ltr">'.( strpos($data[$i]['time_limit'], '0000') === 0 )? 'بدون محدودیت زمانی' : 
                $jdf->timestamp__persian( $data[$i]['time_limit'] ).'</div>',
                ($data[$i]['isPaid']==1) ?
                "<button onclick=\"loadModalPay(this,{$data[$i]['id']},{$data[$i]['isPaid']},{$data[$i]['trackingCode']})\" class=\"btn btn-sm btn-success\">پرداخت شده</button>":
                "<button onclick=\"loadModalPay(this,{$data[$i]['id']},{$data[$i]['isPaid']},{$data[$i]['trackingCode']})\" class=\"btn btn-sm btn-danger\">پرداخت نشده</button>",
                "<button class=\"btn btn-sm btn-".(($data[$i]['ignored']==0) ? 'success':'danger')."\" onclick=\"updateIgnore(this,{$data[$i]['id']},{$data[$i]['ignored']})\"><i class=\"fa fa-eye\"></i></button>",
                '<p>'.$data[$i]['trackingCode'].'</p>',
            ];
    
            $ret['data'][] = $newRow;
          }
          return $ret;
    }



    public function updateIgnore($id,$idIgnored){
        db::query(
            "UPDATE `payments__out` SET `ignored`=? WHERE `id`=? ",
            [
                $idIgnored,
                $id
            ]
        );
        $json['success'] = true;
        return $json;
    }


    public function payment($id,$isPaid,$trackingCode){
        $util = new Utils;
        db::query(
            "UPDATE `payments__out` SET `isPaid`=? , `trackingCode`=?   WHERE `id`=? ",
            [
                $isPaid,
                $util->digitConvertor($trackingCode),
                $id
            ]
        );
        $json['success'] = true;
        return $json;
    }


}