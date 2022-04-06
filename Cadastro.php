<?php
if(isset($_POST['submit']))
{

    include_once("conexao.php");

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $data = $_POST["data"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $cpass = $_POST ["cpass"];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (NomeComp, cpf, DatadeNasc, telefone, email, senhac)
    VALUES('$nome', '$cpf', '$data', '$tel', '$email', '$cpass')");
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<link rel="stylesheet" type="text/css" href="visual.css">
<body>
    <div class="contener"> 
        <div class="card">
            <form action="Cadastro.php" method="POST">
                <h1>Cadastro</h1>
                <input type="text" placeholder="Nome Completo" autocomplete="off" name="nome" id="nome" onchange="comp()"><br><br>
                <input type="text" placeholder="CPF" id="cpf" autocomplete="off" maxlength="14" onkeyup="mcpf()" name="cpf" onchange="comp()"><br><br>
                <input type="date" name="data" id="data" onchange="comp()"><br><br>
                <input type="text" placeholder="Celular para contato" id="tel" autocomplete="off" maxlength="13" onkeydown="mtel()" name="tel" onchange="comp()"><br><br>
                <input type="email" placeholder="E-mail para contato" autocomplete="off" name="email" id="email" onchange="comp()"><br><br>
                <input type="password" placeholder="Crie a Senha" onchange="comp() & confir() & compp()" id="senha" name="pass">
                <img src="open.png" id="open" width="20px" onclick="clicar()"><br><br>
                Minimo 8 caracteres
                <img src="xx.png" width="20px" id="limit" onchange="comp()"><br>
                Minimo um número
                <img src="xx.png" width="20px" id="nlimit" onchange="confir()"><br><br>
                <input type="password" placeholder="Confime a Senha" onchange="comp()" id="csenha" name="cpass">
                <img src="open.png" id="copen" width="20px" onclick="cclicar()"><br><br>

                <div id="botoess">
                    <button type="submit" name="submit" id="botoes" disabled>Registrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    function mcpf(){
        var cpf = document.getElementById("cpf")

        if(cpf.value.length == 3 || cpf.value.length == 7 ){
            cpf.value += "."
        } else if(cpf.value.length == 11){
            cpf.value += "-"
        }
    }

    function mtel(){
        var tel = document.getElementById("tel")

        if(tel.value.length == 0){
            tel.value += "("
        }else if(tel.value.length == 3){
            tel.value += ")"
        }
    }


    function clicar(){
        var senha = document.getElementById("senha")
        var olho = document.getElementById("open")

        if(senha.type == "password"){
            senha.setAttribute("type", "text")
            olho.setAttribute("src", "closed.png")
        }else {
            senha.setAttribute("type", "password")
            olho.setAttribute("src", "open.png")
        }
    }
    function cclicar(){
        var senha = document.getElementById("csenha")
        var olho = document.getElementById("copen")

        if(senha.type == "password"){
            senha.setAttribute("type", "text")
            olho.setAttribute("src", "closed.png")
        }else {
            senha.setAttribute("type", "password")
            olho.setAttribute("src", "open.png")
        }
    }

    function comp(){
        var nome = document.getElementById("nome");
        var cpf = document.getElementById("cpf");
        var data = document.getElementById("data");
        var tel = document.getElementById("tel");
        var email = document.getElementById("email");
        var pass = document.querySelector('#senha').value;
        var cpass = document.querySelector('#csenha').value;
        

        if(pass == cpass && pass.length > 0 && cpass.length > 0 && nome.value.length > 0 && cpf.value.length > 0 && data.value.length > 0 &&   
        tel.value.length > 0 && email.value.length > 0){
            document.querySelector('#botoes').disabled = false

        }else {
            document.querySelector('#botoes').disabled = true
        }
    }

    function compp(){
        var pass = document.getElementById("senha");
        var xis = document.getElementById("limit");

        if(pass.value.length >= 8){
            xis.setAttribute("src", "check.png") 

        }else {
            xis.setAttribute("src", "x.png")

        }
    }

    function confir(){
        var pass = document.getElementById("senha");
        var xis = document.getElementById("nlimit");
        
        if(pass.value.match(/[a-z]/ && /[0-9]/)){
            xis.setAttribute("src", "check.png") 

        }else {
            xis.setAttribute("src", "x.png")

        }
    }
</script>
</html>