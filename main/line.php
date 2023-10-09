<?php

function sendLine(){
    define('LINE_API', 'https://notify-api.line.me/api/notify');
    define('LINE_TOKEN', 'qlsXB1C97haWtUnQfrCOakberxwc2EgbbJkvBFiLVIo');
    
    function bot($msg){
        $data = array('message' => $msg);
        $data = http_build_query($data, '&');
        $header = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer ".LINE_TOKEN."\r\n"."Content-Length: ". strlen($data)."\r\n",
                'content' => $data
            )
        );
        $context = stream_context_create($header);
        $result = file_get_contents(LINE_API, FALSE, $context);
        $res = json_decode($result);
        return $res;
    }
}