<?php
include("my_conecction.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = trim($_POST['titulo']);
    $autor = trim($_POST['autor']);
    $ano = trim($_POST['ano']);
    $categoria = trim($_POST['categoria']);
    $quantidade = trim($_POST['quantidade']);

    if ($titulo && $autor && $ano !== '' && $categoria && $quantidade !== '') {
        $ano = (int)$ano;
        $quantidade = (int)$quantidade;

        $stmt = $conn->prepare("INSERT INTO livros (titulo, autor, ano, categoria, quantidade) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisi", $titulo, $autor, $ano, $categoria, $quantidade);

        if ($stmt->execute()) {
            echo "<p style='color:#81C784;'>Livro cadastrado com sucesso!</p>";
        } else {
            echo "<p style='color:#E57373;'>Erro ao cadastrar: " . $stmt->error . "</p>";
        }

        $stmt->close();
    } else {
        echo "<p style='color:red;'>Por favor, preencha todos os campos antes de cadastrar.</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="fundo">
        <div class="container flex tudo-centro">
            <div class="flex quadrado-meio borda-grossa tudo-centro coluna">

                <div class="flex tamanho-bem">Olá! Seja bem-vindo à livraria do SESI!</div>
                <br>

                <h1 class="flex tamanho-medio">Cadastre o livro</h1>
                <br>

                <form method="POST">
                    <input type="text" placeholder="Título" class="input fonte borda" name="titulo" required>
                    <br>
                    <br>
                    <input type="text" placeholder="Autor" class="input fonte borda" name="autor" required>
                    <br>
                    <br>
                    <input type="number" placeholder="Ano" class="input fonte borda" name="ano">
                    <br>
                    <br>
                    <select name="categoria" class="input fonte borda">
                        <option value="">Selecione a categoria</option>
                        <option value="romance">Romance</option>
                        <option value="didatico">Didático</option>
                        <option value="fantasia">Fantasia</option>
                        <option value="outro">Outro</option>
                    </select>
                    <br><br>
                    <input type="number" placeholder="Quantidade" class="input fonte borda" name="quantidade" min="0">
                    <br><br>
                    <button type="submit" class="flex tamanho-cadastrar cor-cadastrar">Cadastrar</button>
                </form>

                <br>
                <a href="livros.php" class="flex tudo-centro tamanho-cadastrar cor-cadastrar">
                    Clique para ver os livros listados
                </a>

            </div>
        </div>
    </div>
</body>

</html>
