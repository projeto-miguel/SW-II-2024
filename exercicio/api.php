<?php

header('Content-Type:application/json');
include './conn.php';

$method = $_SERVER['REQUEST_METHOD'];

echo json_encode($method);