<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php
        require_once '../classes/Sessao.php';
        Sessao::iniciar();

        if (Sessao::get('erro_login')) {
            echo '<p style="color: red;">' . Sessao::get('erro_login') . '</p>';
            Sessao::destruir('erro_login'); 
        }
        ?>

        <form method="POST" action="../controller/processa_login.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <label>
                <input type="checkbox" name="lembrar_email" value="1"> Lembrar e-mail
            </label>
            <button type="submit">Entrar</button>
        </form>
        <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
    </div>
    <script src="../assets/js/script.js"></script>
</body>
</html>
