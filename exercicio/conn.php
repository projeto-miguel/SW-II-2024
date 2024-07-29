<?php

$host = 'localhost';
$db = 'etecmcm';
$user = 'root';
$pass = '';

$conn = new mysqli($host,$user,$pass,$db);

if ($conn->connect_error) {
    die();
}
// else{
//     echo 'SUCESSO';
// }