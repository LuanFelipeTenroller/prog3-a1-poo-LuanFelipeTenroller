<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .barra-forca {
            width: 100%;
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin-top: 10px;
            transition: width 0.3s ease;
        }
        .barra-forca > div {
            height: 100%;
            border-radius: 5px;
        }
        .fraca {
            width: 33%;
            background-color: red;
        }
        .media {
            width: 66%;
            background-color: orange;
        }
        .forte {
            width: 100%;
            background-color: green;
        }
        .forca-texto {
            margin-top: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form method="POST" action="../controller/processa_cadastro.php">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>
            <div class="barra-forca">
                <div id="forca-senha" class="senha-forca"></div>
            </div>
            <div id="forca-texto" class="forca-texto"></div>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem conta? <a href="login.php">Entrar</a></p>
    </div>
    <script src="../assets/js/script.js"></script>
</body>
</html>
