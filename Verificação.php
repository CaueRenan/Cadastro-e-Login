<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
include_once("conexao.php");

$email = $_POST['email'];
$pass = $_POST['senha'];

$verificar = "SELECT * FROM usuarios WHERE email = '$email' and senhac = '$pass'";
$resultado = $conexao->query($verificar);

if(mysqli_num_rows($resultado) < 1){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location: Login.html');
    
}else{
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;

    header('Location: deucerto.php');

}

}else{
    header('Location:Login.html');
}

?>