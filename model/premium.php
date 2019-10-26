<?php
class premium {

    public function offCodes(){
            $ret['draw']            = (int)$_POST['draw'];
            $searchVal              = $_POST['search']['value'];
            $start                  = $_POST['start'];
            $length                 = $_POST['length'];
            $ret['recordsFiltered'] = (int)$length;
            $ret['iTotalRecords']   = (int)$length;
            if($searchVal==''){
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `offcodes`");
            $data = db::fetchAll(
                "SELECT * FROM `offcodes`
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [ $length, $start]
            )? : [];
            }else{
                $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `offcodes` WHERE `id`=? or `name` like ? ",[ $searchVal,"%$searchVal%"]);
                $data = db::fetchAll(
                    "SELECT * FROM `offcodes` WHERE `id`= ? or `name` like ? 
                     ORDER BY `id` DESC
                     LIMIT ? OFFSET ?",
                     [ $searchVal,"%$searchVal%",$length, $start]
                )? : [];

            }
            $jdf = new jdf;
            $ret['data']=[];
            for($i=0; $i<count( $data ); $i++){
                $newRow = [

                    '<pre><code>'.$data[$i]['id'].'</code><pre>',
                    '<pre><code>'.$data[$i]['name'].'</code><pre>',
                    '<pre><code>'.$data[$i]['perc'].'</code><pre>',
                    '<div class="form-group">
                        <input class="bootstraptoggle  toggleActive" data-id="'.$data[$i]['id'].'" data-style="ios" type="checkbox" data-width="100" data-height="40" id="toggle_active" data-toggle="toggle"
                         data-on="فعال" data-off="غیر فعال" data-onstyle="success" data-offstyle="danger"'.(($data[$i]['active'])=='1' ? 'checked':'').'>
                    </div>',
                    '<code>'.
                        ($data[$i]['user_limit']==0 ? '∞' : $data[$i]['user_limit'])
                    .'</code>', 
                    '<code>'.$this->getuseOffcodes( $data[$i]['id'] ).'</code>',
                    '<pre><code><div dir="ltr">'.
                    (( strpos($data[$i]['time_limit'], '0000') === 0 )? 'بدون محدودیت زمانی' : 
                        $jdf->timestamp__persian( $data[$i]['time_limit'] ))
                        .'</div></code><pre>',
                    "<button class=\"btn btn-sm btn-primary\" onclick=\"loadModal('{$data[$i]['id']}','{$data[$i]['name']}','{$data[$i]['perc']}','{$data[$i]['user_limit']}','{$data[$i]['time_limit']}',{$data[$i]['active']})\"><i class=\"fa fa-pencil\"></i></button>",
   
                ];

                $ret['data'][] = $newRow;
            }
            return $ret;
    }  



     public function offCodesAdd($id,$name,$perc,$user_limit,$time_limit,$active){
            $json['success'] = false;
            if( $id == 'new' ){
                        db::insert(
                       'offcodes',
                        [
                            'name' =>$name,
                            'perc' =>$perc,
                            'user_limit' => $user_limit,
                            'time_limit' => $time_limit,
                            'active' => $active,
                        ],
                        true
                        );  
                        $json['success'] = true;
                       
            }else{
                        db::query(
                                        "UPDATE `offcodes` SET `name`=?,`perc`=?,`active`=?,`user_limit`=?,`time_limit`=? WHERE `id`=?",
                                        [
                                            $name,$perc,$active,$user_limit,$time_limit,$id
                                            ]
                                    );
                                $json['success'] = true;


            } 

            return $json;
                   
    }  


    public function getuseOffcodes($offCodesId){
        return db::fetchColumn(
            "SELECT COUNT(*) FROM `offcodes__usage` WHERE `_off`=?",
            [ $offCodesId]
        )?:0;
    }
  
  




    public function redeem(){
        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
        if($searchVal==''){
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `redeem__codes`");
        $data = db::fetchAll(
            "SELECT * FROM `redeem__codes`
            ORDER BY `id` DESC
            LIMIT ? OFFSET ?",
            [ $length, $start]
        )? : [];
        }else{
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `redeem__codes`");
        $data = db::fetchAll(
            "SELECT * FROM `redeem__codes` WHERE `id`=? or `code` like ? or `type` like ? 
            ORDER BY `id` DESC
            LIMIT ? OFFSET ?",
            [$searchVal,"%$searchVal%","%$searchVal%",$length, $start]
        )? : [];
        }
        $jdf = new jdf;
        $util = new Utils;
        $ret['data']=[];
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                '<pre><code>'.$data[$i]['id'].'</code><pre>',
                '<pre><code>'.$data[$i]['code'].'</code><pre>',
                '<pre><code>'.$data[$i]['type'].'</code><pre>',
                '<pre><code>'.$data[$i]['value'].'</code><pre>',
                '<div class="form-group">
                        <input class="bootstraptoggle toggleActive" data-id="'.$data[$i]['id'].'"  data-style="ios" type="checkbox" data-width="100" data-height="40" data-toggle="toggle"
                         data-on="فعال" data-off="غیر فعال" data-onstyle="success" data-offstyle="danger"'.(($data[$i]['active'])=='1' ? 'checked':'').'>
                </div>',
                '<code>'.
                ($data[$i]['user_limit']==0 ? '∞' : $data[$i]['user_limit'])
                .'</code>', 
                '<code>'.$this->getuseRedeem( $data[$i]['id'] ).'</code>',
                '<pre><code><div dir="ltr">'.
                        (( strpos($data[$i]['time_limit'], '0000') === 0 )? 'بدون محدودیت زمانی' : 
                        $jdf->timestamp__persian( $data[$i]['time_limit'] ))
                 .'</div></code><pre>',
                "<button class=\"btn btn-sm btn-primary\" onclick=\"loadModal('{$data[$i]['id']}','{$data[$i]['code']}','{$data[$i]['type']}','{$data[$i]['value']}','{$data[$i]['user_limit']}','{$jdf->timestamp__persian( $data[$i]['time_limit'] )}',{$data[$i]['active']})\"><i class=\"fa fa-pencil\"></i></button>",
            ];
    
            $ret['data'][] = $newRow;
          }
          return $ret;
    }
    


    public function getuseRedeem($RedeemId){
        return db::fetchColumn(
            "SELECT COUNT(*) FROM `redeem__usage` WHERE `_redeem`=?",
            [ $RedeemId]
        )?:0;
    }




    public function redeemAdd($id,$code,$type,$value,$user_limit,$time_limit,$active){
        $json['success'] = false;
          if( $id == 'new' ){
                    db::insert(
                   'redeem__codes',
                    [
                        'code' =>$code, 
                        'type' =>$type, 
                        'value' =>$value,
                        'user_limit' => $user_limit,
                        'time_limit' => $time_limit,
                        'active' => $active
                    ],
                    true
                    );  
                    $json['success'] = true;
                }else{
                    db::query(
                                    "UPDATE `redeem__codes` SET `code`=?,`type`=?,`value`=?,`user_limit`=?,`time_limit`=?,`active`=? WHERE `id`=?",
                                    [
                                        $code,
                                        $type,
                                        $value,
                                        $user_limit,
                                        $time_limit,
                                        $active,
                                        $id
                                    ]
                                );
                            $json['success'] = true;

          } 
                
                return $json;    
                           
    }  





    
     
    
    public function daily(){
            $ret['draw']            = (int)$_POST['draw'];
            $searchVal              = $_POST['search']['value'];
            $start                  = $_POST['start'];
            $length                 = $_POST['length'];
            $ret['recordsFiltered'] = (int)$length;
            $ret['iTotalRecords']   = (int)$length;
            $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `daily__gift`");
            $data = db::fetchAll(
                "SELECT * FROM `daily__gift`
                ORDER BY `id` DESC
                LIMIT ? OFFSET ?",
                [ $length, $start]
            )? : 0;
            $jdf = new jdf;
            $util = new Utils;
            for($i=0; $i<count( $data ); $i++){
                $newRow = [
                    '<pre><code>'.$data[$i]['id'].'</code><pre>',
                    '0',
                     $data[$i]['type'],
                     $data[$i]['value'],
                     '<div class="form-group">
                     <input class="bootstraptoggle toggleActive" data-style="ios" type="checkbox" data-width="100" data-height="40" id="active" data-toggle="toggle"
                     data-on="فعال" data-off="غیر فعال" data-onstyle="success" data-offstyle="danger"'.(($data[$i]['active'])=='1' ? 'checked':'').'>
                     </div>',
                    ];
        
                $ret['data'][] = $newRow;
              }
              return $ret;
    }



    public function toggleOffcodes($id,$active){

        $row = db::query(
            "UPDATE `offcodes` SET `active`=?  WHERE `id`=? ",
            [$active,$id]
        )?:0;
      $json['success'] = true;

      return $row==0 ? false :$json ;
             
    }


    public function toggleRedeem($id,$active){

        $row = db::query(
            "UPDATE `redeem__codes` SET `active`=?  WHERE `id`=? ",
            [$active,$id]
        )?:0;
      $json['success'] = true;

      return $row==0 ? false :$json;
             
    }

    


}
