<?php

class Utils {
    public function containsArr($str, array $arr){
        foreach($arr as $a) {
            if (stripos($str,$a) !== false) return true;
        }
        return false;
    }

    public function startsWith($small, $big){
        return strpos($big, $small) === 0 ? true:false;
    }

    public  function digitConvertor($string) {
        $persian = array('۰', '۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $eng     = range(0, 9);

        $string = str_replace($persian, $eng, $string);

        return $string;
    }

    public function cashFormat($in){
        return number_format($in,0,NULL,'٫');
    }
}