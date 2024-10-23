<?php
include_once('C:/xampp/htdocs/Vidinhas/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo "Por favor, insira um email válido.";
        exit;
    }

    if (strlen($usuario) < 5 || strlen($usuario) > 50) {
        echo "O nome de usuário deve ter entre 5 e 50 caracteres.";
        exit;
    }

    $email = mysqli_real_escape_string($conexao, $email);
    $usuario = mysqli_real_escape_string($conexao, $usuario);

    $sql = "INSERT INTO login (email, nomeUsuario) VALUES ('$email', '$usuario')";
    
    
    if (mysqli_query($conexao, $sql)) {
        header("Location: ../Home/Home.html");
        exit();
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conexao);
    }
}
/*
    mysqli_close($conexao); else {
    echo "Formulário não enviado corretamente.";
}
*/

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
                    <button type="submit" name="submit" id="btn">Entrar</button>
                </p>
            </form>
        </div>
    </div>
    
    <script src="Login.js"></script>

</body>
</html>