<?php 

include("my_conecction.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];


$sql = "INSERT INTO livros (titulo, autor, ano, categoria, quantidade) 
VALUES ('$titulo', '$autor', '$ano', '$categoria', '$quantidade')";

if($conn->query($sql) === TRUE){
    echo "Usuario cadastrado com sucesso!";
} 

else{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();