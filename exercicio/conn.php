<?php

$host = 'localhost';
$db = 'etecmcm';
$user = 'root';
$pass = '';

$conexao = new mysqli($host,$user,$pass,$db);

if ($conexao->connect_error) {
    die();
}
// else{
//     echo 'SUCESSO';
// }