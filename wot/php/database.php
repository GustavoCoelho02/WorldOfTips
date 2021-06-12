<?php

function connector()
{
    $host = "127.0.0.1";
    $db   = "worldoftips";
    $user = "root";
    $pass = "";
    $con = mysqli_connect($host, $user, $pass, $db);
    if (!$con) {
        console_log(mysqli_connect_error());
        die("Connection failed: " . mysqli_connect_error());
    } else {
        return $con;
    }
    /*
    senha: Coelho@40028922
    nome: id16921055_worldoftips
    usuário: id16921055_gustavo
    host: localhost
    dados para a versão hosteada
    */
}

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
?>