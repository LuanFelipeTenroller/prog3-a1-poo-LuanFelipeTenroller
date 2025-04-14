<?php
 session_start();

 $nome = htmlspecialchars($_POST['nome']);
 $email = filter_input(INPUT_POST, 'email');
 $senha = $_POST['senha'];
 $lembrar = isset($_POST['lembrar']);

 if ($email){
    echo "Email inválido";
 }

$_SESSION['usuario'] = $nome;
if($lembrar){
    setcookie('email_usuario', $email, time() + 3600); // 1 hora
}

header('Location: sessao.php');
exit;
?>
