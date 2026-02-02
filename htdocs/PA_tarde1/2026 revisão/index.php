<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex">
        <div class="flex square">
            <img src="https://images.unsplash.com/photo-1512850183-6d7990f42385?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dmVydGljYWx8ZW58MHx8MHx8fDA%3D" alt="" class="imagem">
        </div>
        <div class="flex square1">
            <div class="flex column centro">
                <form action="processa.php" method="POST" class="flex column centro">
                <h1>Faça seu cadastro aqui!</h1>
                <br>
                <input type="text" placeholder="nome" name="nome" class="input">
                <br>
                <input type="email" placeholder="email" name="email" class="input">
                <br>
                <input type="text" placeholder="cpf" name="cpf" class="input">
                <br>
                <input type="date" placeholder="data de nascimento" name="data_nasc" class="input">
                <br>
                <input type="password" placeholder="senha" name="senha" class="input">
                <br>
                <input type="submit" placeholder="Enviar" value="enviar" class="input">
                </form>  
            </div>
        </div>
    </div>
</body>
</html>