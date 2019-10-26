<?php
class shop {

 public function coin(){


    $ret['draw']            = (int)$_POST['draw'];
    $searchVal              = $_POST['search']['value'];
    $start                  = $_POST['start'];
    $length                 = $_POST['length'];
    $ret['recordsFiltered'] = (int)$length;
    $ret['iTotalRecords']   = (int)$length;
    if($searchVal==''){
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `shop`");
        $data = db::fetchAll(
            "SELECT * FROM `shop`
            ORDER BY `id` DESC
            LIMIT ? OFFSET ?",
            [ $length, $start]
        )? : [];
    }else{
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `shop` WHERE `id`=? or `name` like  ?",  [$searchVal,"%$searchVal%"]);
        $data = db::fetchAll(
            "SELECT * FROM `shop` WHERE `id`=? or `name` like ? 
            ORDER BY `id` DESC
            LIMIT ? OFFSET ?",
            [ $searchVal,"%$searchVal%",$length, $start]
        )? : [];
    }
    
    $jdf = new jdf;
    $util = new Utils;
    $ret['data']=[];
    for($i=0; $i<count( $data ); $i++){
        $newRow = [
            '<pre><code>'.$data[$i]['id'].'</code><pre>',
            '<p>'.$data[$i]['name'].'</p>',
            '<p>'.$data[$i]['quantity'].'</p>', 
            '<p>'.$util->cashFormat($data[$i]['price']).'</p>',
            '<p>'.$util->cashFormat($data[$i]['fullPrice']).'</p>',
            "<button class=\"btn btn-sm btn-primary\" onclick=\"loadModal('{$data[$i]['id']}','{$data[$i]['name']}','{$data[$i]['quantity']}','{$data[$i]['price']}','{$data[$i]['fullPrice']}')\"><i class=\"fa fa-pencil\"></i></button>",
            "<button class=\"btn btn-sm btn-".(($data[$i]['isVisible']==1) ? 'success':'danger')."\" onclick=\"updateIgnore(this,{$data[$i]['id']},{$data[$i]['isVisible']})\"><i class=\"fa fa-eye\"></i></button>",
            '<p>'.$data[$i]['trackingCode'].'</p>'
        ];

        $ret['data'][] = $newRow;
      }
      return $ret;
 }



 public function coinAdd($id,$name,$quantity,$price,$fullPrice){
        $json['success'] = false;
          if( $id == 'new' ){
                    db::insert(
                   'shop',
                    [
                        'name' =>$name, 
                        'quantity' =>$quantity, 
                        'price' =>$price,
                        'fullPrice' => $fullPrice,
                    ]
                    );  
                    $json['success'] = true;
                }else{
                    db::query(
                                    "UPDATE `shop`SET `name`=?,`quantity`=?,`price`=?,`fullPrice`=? WHERE `id`=?",
                                    [
                                        $name,
                                        $quantity,
                                        $price,
                                        $fullPrice,
                                        $id
                                    ]
                                );
                            $json['success'] = true;

          } 
                header('Location:/admin/shop/coin');
                exit();
                return response(json_encode($json), 200, ['content-type' => 'application/json']);    
                           
 }  


 public function updateIsVisible($id,$isVisible){
    db::query(
        "UPDATE `shop` SET `isVisible`=? WHERE `id`=? ",
        [
            $isVisible,
            $id
        ]
    );
    $json['success'] = true;
    return $json;

 }

}
