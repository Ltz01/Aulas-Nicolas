<?php
require 'my_conecction.php';

if (!isset($_GET['id'])) {
    echo "ID não informado.";
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM livros WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Livro não encontrado.";
    exit;
}

$livro = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro | Biblioteca Virtual</title>
    <link rel="stylesheet" href="livros.css">
</head>

<body>

    <header class="topo">
        <div class="sesi">Biblioteca do SESI</div>
        <div class="secundaria">Edite abaixo as informações do livro selecionado:</div>
    </header>

    <main class="conteudo">

        <div class="form-card">

            <h2 class="titulo-form">Editar Livro</h2>

            <form action="processa_editar.php" method="POST" class="form-editar">

                <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

                <label>Título:</label>
                <input type="text" name="titulo" value="<?php echo $livro['titulo']; ?>" required>

                <label>Autor:</label>
                <input type="text" name="autor" value="<?php echo $livro['autor']; ?>" required>

                <label>Ano:</label>
                <input type="number" name="ano" value="<?php echo $livro['ano']; ?>" required>

                <label>Categoria:</label>
                <input type="text" name="categoria" value="<?php echo $livro['categoria']; ?>" required>

                <label>Quantidade:</label>
                <input type="number" name="quantidade" value="<?php echo $livro['quantidade']; ?>" required>

            </form>

            <button type="submit" class="botao-voltar color" style="margin-top: 15px;">
                    Salvar alterações
                </button>

            <a class="botao-voltar" href="livros.php">Voltar</a>

        </div>

    </main>

</body>
</html>
