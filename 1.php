<?php

session_start();
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin:http://10.30.29.88:63341');
header('Access-Control-Allow-Credentials: true');

if (isset($_SESSION['uname'])) {
    $username = $_SESSION['uname'];
}else{
    $username = NULL;
}

$arr = array('userName' => $username);
$arr += array('WeatherInfo' => "<iframe scrolling='no' src='https://tianqiapi.com/api.php?style=tp&skin=durian&city=ÎÂÖÝ' frameborder='0' 
width='160' height='260' allowtransparency='true'></iframe>");