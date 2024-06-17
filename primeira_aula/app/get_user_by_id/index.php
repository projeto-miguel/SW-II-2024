<?php

//CÓDIGO PRINCIPAL DO APP

require_once __DIR__ . '/../../api/config.php';
require_once __DIR__ . '/../../api/response.php';

if(!isset($_GET['id'])){
    echo Response::SendResponse(400,"'id' key not properly set.");
    die();
}

$data = require_once __DIR__ ."/../../api/data.php";

if(isset($data[$_GET['id']])){
    $user = $data[$_GET['id']];
}else{
    echo Response::SendResponse(200,'user of id ' . $_GET['id'] . ' does not exist.');
    die();
}

echo Response::SendResponse(200,'API running ok',$user);