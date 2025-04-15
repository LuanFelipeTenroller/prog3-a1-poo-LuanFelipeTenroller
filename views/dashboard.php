<?php
require_once '../classes/Sessao.php';
Sessao::iniciar();

$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Bem-vindo, <?= htmlspecialchars($usuario) ?>!</h2>
        <p><strong>EMAIL LEMBRADO:</strong> <?= htmlspecialchars($_COOKIE['lembrar_email']) ?></p>
        <p><a href="logout.php">Sair</a></p>
    </div>
</body>
</html>