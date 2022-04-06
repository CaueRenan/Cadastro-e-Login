<?php
session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true )) 
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location: Login.html');
}else{
$logado = $_SESSION['email'];
}

if(isset($_GET['logout'])){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location: Login.html');
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="visual.css">
<body>
    <div class="contener">
        <div class="card">
            <h1>DEU CERTO MANEEEEE</h1><br><br>
            <a href ="?logout" name="deslogado">Desconectar</a>
        </div>
    </div>
</body>
</html>