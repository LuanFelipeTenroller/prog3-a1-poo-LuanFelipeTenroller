<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Aula 5</title>
</head>
<body>
    <h2>Login</h2><br>
    <form class="container" method="post" action="processa.php">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <label>Lembrar meu E-mail</label>
        <input type="checkbox" name="lembrar" value="1" ><br><br>

        <button type="submit">Entrar</button>

    </form>

</body>
</html>