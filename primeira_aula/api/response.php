<?php

class Response{
    public static function SendResponse($status = 200,$message = 'API running ok!',$data = null){
        //corpo da resposta
        header('Content-Type: application/json');

        return json_encode([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }
}