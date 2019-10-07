<?php

class Dialog{
    private $ret;
    public function new(){
        unset($this->ret);
        $this->ret = [
            'message' => '',
            'ok'      => NULL,
            'cancel'  => NULL
        ];
        return $this;
    }
    public function message( $text ){
        $this->ret['message'] = $text;
        return $this;
    }
    public function ok( $text, $action ){
        $this->ret['ok'] = [
            'text'   => $text,
            'action' => $action
        ];
        return $this;
    }
    public function cancel( $text, $action ){
        $this->ret['cancel'] = [
            'text'   => $text,
            'action' => $action
        ];
        return $this;
    }
    public function style( $type=NULL ){
        switch ($type) {
            case 'success':
                $this->ret['style'] = [
                    'url'             => '',
                    'backgroundStart' => '#FFF',
                    'backgroundEnd'   => '#FFF',
                    'text'            => '#000',
                    'btn'             => '#000',
                    'btnText'         => '#000'
                ];
            break;
            case 'danger':
                $this->ret['style'] = [
                    'url'             => '',
                    'backgroundStart' => '#FFF',
                    'backgroundEnd'   => '#FFF',
                    'text'            => '#000',
                    'btn'             => '#000',
                    'btnText'         => '#000'
                ];
            break;
            case 'info':
                $this->ret['style'] = [
                    'url'             => '',
                    'backgroundStart' => '#FFF',
                    'backgroundEnd'   => '#FFF',
                    'text'            => '#000',
                    'btn'             => '#000',
                    'btnText'         => '#000'
                ];
            break;
            default:
                $this->ret['style'] = [
                    'url'             => '',
                    'backgroundStart' => '#FFF',
                    'backgroundEnd'   => '#FFF',
                    'text'            => '#000',
                    'btn'             => '#000',
                    'btnText'         => '#000'
                ];
        }
        return $this;
    }
    public function make(){
        return $this->ret;
    }
}