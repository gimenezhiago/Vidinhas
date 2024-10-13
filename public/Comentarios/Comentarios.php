<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentário</title>
    <link rel="stylesheet" href="Comentarios.css">
    <link rel="shortcut icon" href="../imagens/Favicon.png" type="image/x-icon">
</head>
<body>
    <nav id="menu">
        <img src="../imagens/Nav.png" alt="Menu" id="nav" class="hamburger">
        <img class="vidinha" src="../imagens/Logo.png" alt="">
        <div></div>
        <ul id="menu-items" class="menu-items">
            <li><a href="./Home.html">Home</a></li>
            <li><a href="../Anos/2023.html">Ano 2023</a></li>
            <li><a href="../Anos/2024.html">Ano 2024</a></li>
            <li><a href="../Comentarios/Comentarios.html">Comentário</a></li>
        </ul>
    </nav>
    <div class="PaiContainer">
        <div class="container1">
            <h1>Feedback</h1>
            <form action="#" class="login" id="feedbackForm">
                <p class="usuario">
                    <label for="usuario">Nome do usuário</label>
                    <img src="../imagens/Email.png" alt="Email">
                    <input type="text" id="usuario" placeholder="Digite seu nome de usuário" name="usuario">
                </p>
                <p class="mensagem">
                    <label for="mensagem">Mensagem</label>
                    <img src="../imagens/Usuario.png" alt="Usuário">
                    <textarea id="mensagem" placeholder="Digite sua mensagem" name="mensagem"></textarea>
                </p>
                <p class="botao">
                    <button type="submit" id="btn">Enviar</button>
                </p>
            </form>
        </div>
        <div class="container2">
        </div>
    </div>
    <script src="Comentarios.js"></script>
</body>
</html>