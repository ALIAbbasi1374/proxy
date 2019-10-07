<?php

class proxy {


    public function check(){

        $result=array();
        $row = db::fetchAll("SELECT * FROM `proxy`");
        $length=db::rowCount("SELECT * FROM `proxy`");
        for( $i=0;$i<$length;$i++){
        $host = $row[$i]['server']; 
        $port = $row[$i]['port']; 
        $waitTimeoutInSeconds = 30; 
        if($fp = @fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
            $result[]=$row[$i]['address'];
        } 
        fclose($fp);
      }

    return $result;
}

   

}