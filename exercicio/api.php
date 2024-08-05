<?php

header('Content-Type:application/json');
include './conn.php';

$method = $_SERVER['REQUEST_METHOD'];

$uri = $_SERVER['REQUEST_URI'];

$path = parse_url($uri,PHP_URL_PATH);

$path = trim($path,'/');

$exploded = explode('/',$path);
$url_parts = array();
foreach($exploded as $part){
    array_push($url_parts, $part ?? '');
}
$response = [
    'method' => $method,
    'url1' => $url_parts[1] ?? '',
    'url2' => $url_parts[2] ?? '',
    'url3' => $url_parts[3] ?? '',
    'url4' => $url_parts[4] ?? ''
];
switch ($method) {
    case 'GET':
        //aaaaa
        break;
    case 'POST':
        break;
    case 'PUT':
        break;
    case 'DELETE':
        break;
    default:
        echo json_encode([
            'message' => 'method not allowed'
        ]);
        break;
}



// echo json_encode($response);