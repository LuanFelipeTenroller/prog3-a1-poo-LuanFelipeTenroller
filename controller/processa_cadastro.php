<?php
require_once '../classes/Usuario.php';
require_once '../classes/Autenticador.php';

$nome = $_POST['nome'] ?? '';
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'] ?? '';

if (!$nome || !$email || !$senha) {
    die("Preencha todos os campos corretamente.");
}

$usuario = new Usuario($nome, $email, $senha);
Autenticador::registrar($usuario);

header('Location: ../views/login.php');
exit;