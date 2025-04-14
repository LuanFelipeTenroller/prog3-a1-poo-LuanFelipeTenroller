<?php 
session_start();

    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php");
        exit;
    } 

    $usuario = $_SESSION['usuario'];
    $email = $_COOKIE['email_usuario'] ?? 'Não lembrado';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>
    <link rel="stylesheet" href="./css/style.css">">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Bem-vindo, <?= htmlspecialchars($usuario) ?></h2>
        <p>E-mail lembrado : <?= htmlspecialchars($email) ?> </p>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>