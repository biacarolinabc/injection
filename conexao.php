<?php

$usuario = 'root';
$senha = "";
$database = 'injection'; //nome do banco
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar".$mysqli->error);
}