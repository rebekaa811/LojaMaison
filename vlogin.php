<?php 
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];  
    $senha = $_POST['Senha'];  

    //Pra checar se o email informado está cadrastado
    $sql_check_email = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $mysqli->prepare($sql_check_email);
    $stmt->bind_param("s", $email); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        echo "Este e-mail não está cadastrado. Tente novamente!";
        exit;
    }

    $user = $result->fetch_assoc();
    if (!password_verify($senha, $user['senha'])) {
        echo "Senha incorreta, tente novamente!";
        exit;
    }

    session_start();  
    $_SESSION['user_id'] = $user['id'];  
    $_SESSION['email'] = $user['email']; 
    header("Location: index.php"); 
    exit;
}
?>

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

        <form id="signupForm" action="vlogin.php" method="POST">
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
</body>
</html>
