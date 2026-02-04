<?php
require 'my_conecction.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];

$sql = "UPDATE livros 
        SET titulo='$titulo', autor='$autor', ano='$ano', categoria='$categoria', quantidade='$quantidade'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: livros.php?msg=editado");
    exit;
} else {
    echo "Erro ao atualizar: " . $conn->error;
}

$conn->close();
