<?php

$hostname = "localhost";
$bancodedados = "loja";        
$usuario = "root";        
$senha = "";            

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}
?>