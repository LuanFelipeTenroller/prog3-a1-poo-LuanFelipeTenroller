<?php
require_once '../classes/Sessao.php';
require_once '../classes/Autenticador.php';

Sessao::iniciar();

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];

if (!$email || empty($senha)) {
    die("Dados inválidos.");
}

if (isset($_POST['lembrar_email'])) {
    setcookie('lembrar_email', $email, time() + (7 * 24 * 60 * 60), '/'); // 7 dias
} else {
    setcookie('lembrar_email', '', time() - 3600, '/');
}

if (Autenticador::login($email, $senha)) {
    header('Location: ../views/dashboard.php');
    exit;
} else {
    Sessao::set('erro_login', 'Credenciais inválidas.');
    header('Location: ../views/login.php');
    exit;
}