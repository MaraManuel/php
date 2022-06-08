<?php 

include 'conexao.php';

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Methods:PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers:Origin, Content-Type, Authorization, Accept, X-Request-width,x-xsrf-token");
header("Content-Type: application/json; charset-utf-8*");

header("Access-Control-Allow-Origin:*");

$post = json_decode(file_get_contents('php://input'), true);

?>
