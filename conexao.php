<?php

$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "usuarios";
$conexao = mysqli_connect($hostname,$user,$password,$dbname);

if(!$conexao){
    print "falha na conexão com o Banco de dados";
}
?>