<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="icon" href="icon.png">
</head>
<body>
    <main>
        <h1>Cadastro</h1>

        <form id="signupForm" action="add.php" method="POST">
            <label for="Nome">
                <span>Nome</span>
                <input type="text" id="Nome" name="Nome" required>
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email" required>
            </label>

            <label for="Senha">
                <span>Senha</span>
                <input type="password" id="Senha" name="Senha" required>
            </label>

            <input type="submit" value="Cadastrar-se">
            <br>
            <div class="seqlg">
                <p>Já tenho uma conta.</p>
                <a href="vlogin.php">Fazer login</a>
            </div>
           
            </form>
    </main>
    <script>
        document.getElementById('signupForm').onsubmit = function(event) {
            event.preventDefault();
            window.location.href = 'vlogin.php';
        };
    </script>
</body>
</html>