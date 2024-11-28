<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="icon" href="icon.png">
</head>
<body>
    <main>
        <h1>Cadrasto</h1>

        <form action="add.php" method="POST">

        <form id="signupForm" action="/">
            <label for="Nome">
                <span>Nome</span>
                <input type="text" id="Nome" name="Nome">
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="Senha">
                <span>Senha</span>
                <input type="password" id="Senha" name="Senha">
            </label>

            <input  type="submit" value="cadastrar-se">
        </form>
    </main>
    <section class="images">
        <img src="logoTransparente.png" alt="mobile">
        <div class="circle"></div>
    </section>
    <script>
        document.getElementById('signupForm').onsubmit = function(event) {
            event.preventDefault();
            window.location.href='index.php'
        };
    </script>
</body>
</html>