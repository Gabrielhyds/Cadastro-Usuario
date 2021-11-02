<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome,email,profissao) values ('$nome' , '$email' , '$profissao')";
$salvar = mysqli_query($conexao,$sql);

echo "<span style='color:green;font-size:30px;font-weight:bold'>USUÁRIO CADASTRADO COM SUCESSO</span>";
mysqli_close($conexao);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: black;
        }
    </style>
</head>
<body>
    
</body>
</html>