<?php
require 'my_conecction.php';

$sql = "SELECT * FROM livros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="livros.css">
</head>

<body>

    <header class="topo">
        <div class="sesi">Biblioteca do SESI</div>
        <div class="secundaria">Veja abaixo todos os livros cadastrados em nosso sistema:</div>
    </header>

    <main class="conteudo">

        <div class="grid-livros">

            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>

                   <div class="livro">
                        <h3><strong>ID:</strong> <?php echo $row['id']; ?></h3>
                        <p><strong>Titulo:</strong> <?php echo $row['titulo']; ?></p>
                        <p><strong>Autor:</strong> <?php echo $row['autor']; ?></p>
                        <p><strong>Ano:</strong> <?php echo $row['ano']; ?></p>
                        <p><strong>Categoria:</strong> <?php echo $row['categoria']; ?></p>
                        <p><strong>Quantidade:</strong> <?php echo $row['quantidade']; ?></p>

                        <!-- Botões Editar e Excluir -->
                        <div class="acoes">
                            <a class="secundaria" href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
                            <a class="secundaria" 
                               href="excluir.php?id=<?php echo $row['id']; ?>" 
                               onclick="return confirm('Tem certeza que deseja excluir este livro?');">
                               Excluir
                            </a>
                        </div>

                    </div>

                <?php endwhile; ?>
            <?php else: ?>
                <p>Nenhum livro cadastrado</p>
            <?php endif; ?>

        </div>

        <a class="botao-voltar color" href="listar.php">Cadastrar novo livro</a>

    </main>

</body>
</html>
