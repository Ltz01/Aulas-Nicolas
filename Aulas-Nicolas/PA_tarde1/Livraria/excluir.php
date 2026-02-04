<?php
require 'my_conecction.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM livros WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: livros.php?msg=excluido");
        exit;
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
} else {
    echo "ID não informado.";
}
