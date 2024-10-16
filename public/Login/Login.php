<?php
    include_once('C:/xampp/htdocs/Vidinhas/config.php');

    if (isset($_POST['submit'])) {
            
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];

        $email = mysqli_real_escape_string($conexao, $email);
        $usuario = mysqli_real_escape_string($conexao, $usuario);
        
        
        $resul = mysqli_query($conexao, "INSERT INTO login(email, nomeUsuario) VALUES ('$email','$usuario')");

        if ($resul) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados: " . mysqli_error($conexao);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Login.css">
    <link rel="icon" href="../imagens/Favicon.png">
</head>
<body>
    <nav id="menu">
        <img class="vidinha" src="../imagens/Logo.png" alt="">
        <img src="#" alt="">
    </nav>
    <div class="PaiContainer">
        <div class="container">
            <h1>Login</h1>
            <form action="Login.php" method="post" class="login">
                <p class="email">
                    <label for="email">Email</label>
                    <img src="../imagens/Email.png" alt="">
                    <input type="email" placeholder="Digite seu Email" name="email" id="email">
                </p>
                <p class="usuario">
                    <label for="usuario">Nome de usuário</label>
                    <img src="../imagens/Usuario.png" alt="">
                    <input type="text" placeholder="Digite seu nome de usuário" name="usuario" id="usuario">
                </p>
                <p class="botao">
                    <button type="submit" name='submit' id="btn">Entrar</button>
                </p>
            </form>
        </div>
    </div>
    
    <script src="./Login.js"></script>
</body>
</html>