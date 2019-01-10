<?php

header('Access-Control-Allow-Headers:Content-Type');
//header('Content-Type:application/json; charset=utf-8');
header('Content-Type:text/javascript; charset=utf-8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT');

$data = json_decode(file_get_contents("php://input"), true);
$name = $data["userName"];
$psd = $data["passWord"];

if ($name === "123" && $psd === "123") {
    echo '{"message": "success"}';
}
