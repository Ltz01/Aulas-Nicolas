<?php

include_once "connection.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nasc'];

$senha_criptografada = md5($senha);

$sql = "INSERT INTO usuario(nome, email, cpf, data_nascimento, senha) VALUES ('$nome', '$email', '$cpf', '$data_nasc', '$senha_criptografada')";

if(mysqli_query($conn, $sql)){
    return true;
}
else{
    return false;
}