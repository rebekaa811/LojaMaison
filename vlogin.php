<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="vlogin.css">
    <link rel="icon" href="icon.png">
</head>
<body>
    <main>
        <h1>Login</h1>

        <form id="signupForm" action="add.php" method="POST">
            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email" required>
            </label>

            <label for="Senha">
                <span>Senha</span>
                <input type="password" id="Senha" name="Senha" required>
            </label>

            <input type="submit" value="Entrar">
            </form>
    </main>
    <script>
        document.getElementById('signupForm').onsubmit = function(event) {
            event.preventDefault();
            window.location.href = 'index.php';
        };
    </script>
</body>
</html>