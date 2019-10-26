<?php

class settings {

    public function settings(){


    }


    public function rules(){
        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `app__rules`");
        $data = db::fetchAll(
            "SELECT * FROM `app__rules`
             ORDER BY `id` DESC
             LIMIT ? OFFSET ?",
             [$length, $start]
                );
        $jdf = new jdf;
        $util = new Utils;
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                '<pre><code>'.$data[$i]['id'].'</code><pre>',
                '<span>'.$data[$i]['title'].'</span>',
                '<span>'.$data[$i]['text'].'</span>',       
                "<button class=\"btn btn-secondary btn-sm mr-1\" onclick=\"deleteItem({$data[$i]['id']})\" ><i class=\"fa fa-trash\"></i></button>",
            ];
    
            $ret['data'][] = $newRow;
          }
          return $ret;
    }



    public function rulesAdd($id,$title,$text){
        $json['success'] = false;

        if( $id == 'new' ){
                    db::insert(
                   'app__rules',
                    [
                        'title'=>$title,
                        'text' =>$text,

                    ],
                    true
                    );  
                    $json['success'] = true;
        }else{
                 
        }
                 
        header('Location:/admin/setting/rules');
        exit();
                
        return response(json_encode($json), 200, ['content-type' => 'application/json']);    
                           
               
    }

    
    public function deleteRules($id){
        if(!empty($id)){  
            db::query(
                "DELETE FROM `app__rules` WHERE `id`=?",
                [$id]
            );
            $json['success'] = true;
        }else{   
            $json['success'] = false;
            
        }
        return $json;
   }  




    public function faq(){
        $ret['draw']            = (int)$_POST['draw'];
        $searchVal              = $_POST['search']['value'];
        $start                  = $_POST['start'];
        $length                 = $_POST['length'];
        $ret['recordsFiltered'] = (int)$length;
        $ret['iTotalRecords']   = (int)$length;
        $ret['iTotalDisplayRecords'] = $ret['recordsTotal'] = db::fetchColumn( "SELECT COUNT(*) FROM `app__faq`");
        $data = db::fetchAll(
            "SELECT * FROM `app__faq`
             ORDER BY `id` DESC
             LIMIT ? OFFSET ?",
             [$length, $start]
                );
        $jdf = new jdf;
        $util = new Utils;
        for($i=0; $i<count( $data ); $i++){
            $newRow = [
                '<pre><code>'.$data[$i]['id'].'</code><pre>',
                '<span>'.$data[$i]['question'].'</span>',
                '<span>'.$data[$i]['answer'].'</span>',
                "<button class=\"btn btn-secondary btn-sm mr-1\" onclick=\"deleteItem({$data[$i]['id']})\" ><i class=\"fa fa-trash\"></i></button>",
            ];
    
            $ret['data'][] = $newRow;
          }
          return $ret;
    }


    public function faqAdd($id,$question,$answer){
        $json['success'] = false;

        if( $id == 'new' ){
                    db::insert(
                   'app__faq',
                    [
                        'question'=>$question,
                        'answer' =>$answer,
                       
                    ],
                    true
                    );  
                    $json['success'] = true;
        }else{
                 
        }
                 
        header('Location:/admin/setting/faq');
        exit();
                
        return response(json_encode($json), 200, ['content-type' => 'application/json']);          
    }


    public function deletefaq($id){
        if(!empty($id)){  
            db::query(
                "DELETE FROM `app__faq` WHERE `id`=?",
                [$id]
            );
            $json['success'] = true;
           
        }else{   
            $json['success'] = false;
          
        }  
        return $json;
    }




    public function constant(){
      
        $data = db::fetchAll(
            "SELECT * FROM `constants`"   
        );
        $jdf = new jdf;
        $ret['data']= [];
        for($i=0; $i<count( $data ); $i++){
            $newRow['id'] = $data[$i]['id'];
            $newRow['name'] = $data[$i]['name'];
            $newRow['value'] = $data[$i]['value'];
            $newRow['description'] = $data[$i]['description'];
            $ret['data'][] = $newRow;
        }
        return $ret;
    }





}