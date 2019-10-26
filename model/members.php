<?php

class members {

    public function members(){
        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
    
        if($searchVal==''){
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `members`");
            $data = db::fetchAll(
                "SELECT * FROM `members`
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [ $length, $start]
            )? : [];
        }else{
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `members` WHERE `id`=? or `mobile` like ? or `name` like ?",  [$searchVal,"%$searchVal%","%$searchVal%"]);
            $data = db::fetchAll(
                "SELECT * FROM `members` WHERE `id`=? or `mobile` like ? or `name` like ?
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [
                    $searchVal,
                    "%$searchVal%",
                    "%$searchVal%",
                    $length, $start
                ]
            )? : [];
        }
    
        $jdf = new jdf;
        $AM = new AllowanceManager;
        $WALLET = new Wallet;
        $util = new Utils;
        $pay = new pay;
        $ret['data']= [];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                $data[$i]['id'],
                $data[$i]['name'],
                '<span class="text-green">'.$data[$i]['mobile'].'</span>',
                '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['regDate'] ).'</div><br>'.'<span dir="ltr" class="badge badge-primary mono-1">'.$data[$i]['version'].'</span>',
                '<span class="badge badge-secondary">'.$AM->countAllowance( $data[$i]['id'], 'silver' ).'</span><br>'.
                '<span class="badge badge-warning">'.$AM->countAllowance( $data[$i]['id'], 'golden' ).'</span>',
                '<span >'.$util->cashFormat($WALLET->getWallet( $data[$i]['id'] )).'</span><br>'.
                '<span >'.$util->cashFormat($WALLET->getWalletTotal( $data[$i]['id'] )).'</span>',
                '<span >'.$this->getReferedUsers($data[$i]['id']).'</span>',
                '<span dir="ltr" class="badge badge-success">'.$util->cashFormat($pay->money_in( $data[$i]['id'] )).'</span>'.' '.
                '<span dir="ltr" class="badge badge-danger">'.$util->cashFormat($pay->money_out( $data[$i]['id'] )).'</span>'
                ,
                '<div dir="ltr">
                <a class="btn btn-primary btn-sm" href="/admin/members/'.$data[$i]['id'].'">پروفایل</a>
                </div>'
            ];
            $ret['data'][] = $newRow;
        }
        return $ret;

    }




    private function getReferedUsers($userID){
        return db::fetchColumn(
            "SELECT COUNT(*) FROM `members` WHERE `_referedBy`=?",
            [$userID]
        );
    }



    
    public function gamesHistory($userID){
        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
    
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `game__session` WHERE `_members`=?", [$userID]);
        $data = db::fetchAll(
            "SELECT
            `id`,
            `type`,
            `_game`,
            `timestamp`
            FROM `game__session`
            WHERE `_members`=?
            ORDER BY `id` DESC
            LIMIT ? OFFSET ?",
            [$userID, $length, $start]
            
        )? : [];
    
        $jdf = new jdf;
        $WALLET = new Wallet;
        $util = new Utils;
        $ret['data']= [];
        for($i=0; $i<count( $data ); $i++){
            $helpString = '';
            foreach ($this->getHelp($data[$i]['id']) as $eachHelp) {
                $helpString .= '<span class="badge badge-primary mx-1">'.$eachHelp.'</span>';
            }
            $newRow = [
                $data[$i]['id'],
                '0',
                '<span >'.$util->cashFormat($WALLET->getValueWithSession($data[$i]['id'])).'</span>',
                '<span >'.$this->getIsTrue($data[$i]['id']).'</span>',
                '<span >'.$helpString.'</span>',
                '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['timestamp'] ).'</div>'
            ];
            $ret['data'][] = $newRow;
        }
        return $ret;
        
        
    }




    public function goldenHistory($userID){

        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
    
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `members__allowance` WHERE `_members`=?", [$userID]);
        $data = db::fetchAll(
            "SELECT * FROM `members__allowance`
                WHERE `_members`=?
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [$userID, $length, $start]
                
        )? : [];
    
        $jdf = new jdf;
        $util = new Utils;
        $ret['data']= [];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                $this->getColorBtn($data[$i]['value']),
                $data[$i]['type'],
                '<span >'.$data[$i]['origin'].$data[$i]['originID'].'</span>',
                '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['timestamp'] ).'</div>'
            ];
            $ret['data'][] = $newRow;
        }
        return $ret;
        
        
    }




    public function goldenHistoryAdd($userID,$value, $type, $origin){
        $AM = new AllowanceManager;
        $AM->addAllowance($userID, $value, $type, $origin, '');
        $json['success'] = true;

        return $json;
   }








    public function walletHistory($userID){

        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
    
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `members__wallet` WHERE `_members`=?", [$userID]);
        $data = db::fetchAll(
            "SELECT * FROM `members__wallet`
                WHERE `_members`=?
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [$userID, $length, $start]
                
        )? : [];
    
        $jdf = new jdf;
        $util = new Utils;
        $ret['data']= [];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                
                $data[$i]['_session'],
                '0',
                '<span >'.$this->getColorBtn($data[$i]['value']).'</span>',
                $data[$i]['description'],
                '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['timestamp'] ).'</div>'
            ];
            $ret['data'][] = $newRow;
        }
        return $ret;
        
        
    }





    


    public function ReferedUsers($userID){

        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
    
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `members` WHERE `_referedBy`=?",[$userID]);
        
        $data = db::fetchAll(
            "SELECT * FROM `members` 
            WHERE `_referedBy`=?
            ORDER BY `id` DESC
            LIMIT ? OFFSET ?",
            [$userID, $length, $start]
        )? : [];
        
        $jdf = new jdf;
        $util = new Utils;
        $ret['data']= [];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                $data[$i]['id'],
                '<a class="btn btn-primary btn-sm" href="/admin/members/'.$data[$i]['id'].'" target="_blank">'.$data[$i]['name'].'</a>',
                '<span class="badge badge-primary">'.$data[$i]['version'].'</span>',
                '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['regDate'] ).'</div>'
            ];
            $ret['data'][] = $newRow;
        }
        return $ret;
        
        
    }









    private function getIsTrue($SessionId){
        return db::fetchColumn(
            "SELECT COUNT(*) FROM `game__records` WHERE `_session`=? and `isTrue`=1 ",
            [$SessionId]
        );
    }


    private function getHelp($SessionId){
        return db::fetchAllColumn(
            "SELECT `help` FROM `game__help_spent` WHERE `_session`=?",
            [$SessionId]
        );
    }


    private function getColorBtn($id){
        $util = new Utils;

        if($id>0){
         return '<span class="badge badge-success" dir="ltr">'.$util->cashFormat($id).'</span>';
       }else{
        return '<span class="badge badge-danger" dir="ltr">'.$util->cashFormat($id).'</span>';    
       }
    }


    public function supportMessages($userID){
        $data = db::fetchAll(
            "SELECT * FROM `support__messages`
                WHERE `_members`=?",
                [$userID]     
        )? : [];
        $jdf = new jdf;
        $ret['list']= [];
        for($i=0; $i<count( $data ); $i++){
            $newRow['text'] = $data[$i]['text'];
            $newRow['timestamp'] = '<div dir="ltr">'.$jdf->timestamp__persian( $data[$i]['timestamp'] ).'</div>';
            $newRow['answer'] = $data[$i]['answer'];
            $ret['list'][] = $newRow;
        }
        return $ret;


    }

    public function supportMessagesAdd($userID,$text){
      
                    db::insert(
                   'support__messages',
                    [
                        '_members' =>$userID,
                        'text' =>$text,
                        'answer'=>1
                        
                    ],
                    true
                    );  
                    $json['success'] = true;
        return $json;


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
