<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <nav>
        <ul class="menu">
            <a href="index.php"><li>cadastro</li></a>
            <a href="consultas.php"><li>consultas</li></a>
        </ul>
    </nav>
    <section>
        <h1>Cadastro de usuários</h1>
        <hr><br><br>

        <form method="post" action="processa.php">
            nome<br>
            <input type="text" name="nome" class="campo" maxlength="40" required autofocus style='padding-left:10px;'><br>
            Email<br>
            <input type="email" name="email" class="campo" maxlength="50" required style='padding-left:10px; '><br>
            profissão<br>
            <input type="text" name="profissao" class="campo" maxlength="40" required  style='padding-left:10px;'>
        
            <br><br>
            <input type="submit" value="Salvar" class="btn">
            <input type="reset" value="limpar" class="btn">
        
        </form>
    </section>
</body>
</html>