<?php

class Hash{
  public function hash($in){
    return sha1( PRE_SALT.$in.POST_SALT );
  }
}