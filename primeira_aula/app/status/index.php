<?php

//CÓDIGO PRINCIPAL DO APP

require_once __DIR__ . '/../../api/config.php';
require_once __DIR__ . '/../../api/response.php';

if (_API_IS_ACTIVE) {
    echo Response::SendResponse(200,'tudo nosso nada deles',[
        'version' => _API_VERSION,
        'status' => 'ativo'
    ]);
}else {
    echo Response::SendResponse(200,'tudo nosso nada deles',[
        'version' => _API_VERSION,
        'status' => 'manutenção'
    ]);
}