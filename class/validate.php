<?php
class Validate{
  public function username($in){
    if( strlen($in) < 4 )
      return [ 'status'=> -1, 'text'=> 'نام کاربری نباید کمتر از 4 کاراکتر باشد'];

    if( strlen($in) > 20 )
      return [ 'status'=> -2, 'text'=> 'نام کاربری نباید بیشتر از 20 کاراکتر باشد'];

    if( ctype_alnum($in) )
      return [ 'status'=> -3, 'text'=> 'نام کاربری می‌تواند شامل عدد و حروف بزرگ و کوچک باشد'];

    return [ 'status'=> 1 ];
  }

  public function mobile($in){
    return preg_match("/^09[0-9]{9}$/", $in)?true:false;
  }
}