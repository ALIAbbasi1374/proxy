<?php
use \Curl\Curl;
class SMS {
    public function verification($receptor, $code){
        $curl = new Curl();
        $curl->setHeader('Content-type', 'application/x-www-form-urlencoded');
        $curl->post(
            "https://api.kavenegar.com/v1/".SMS_API_KEY."/verify/lookup.json",
            [
                'template' => 'template',
                'receptor' => $receptor,
                'token'    => $code
            ]
        );
        // $curl->response
        // $curl->getHttpStatusCode()
        return true;
    }
    public function send($receptor, $message){
        $url = "https://api.kavenegar.com/v1/".SMS_API_KEY."/sms/send.json";
        $data = [
            'message'  => $message,
            'receptor' => $receptor,
            'sender'   => SMS_SENDER
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }
}