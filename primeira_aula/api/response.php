<?php

class Response{
    public static function SendResponse($status = 200,$message = 'API running ok!',$data = null){
        //corpo da resposta
        header('Content-Type: application/json');

        if(!_API_IS_ACTIVE){
            return json_encode([
                'status' => 400,
                'message' => 'API offline neste momento',
                'api_version' => _API_VERSION,
                'time_response' => time(),
                'data_atual' => date('Y-m-d H:i:s'),
                'dados' => null
            ]);
        }

        return json_encode([
            'status' => $status,
            'message' => $message,
            'api_version' => _API_VERSION,
            'time_response' => time(),
            'data_atual' => date('Y-m-d H:i:s'),
            'dados' => $data
        ]);
    }
}