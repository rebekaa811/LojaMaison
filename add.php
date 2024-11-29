<?php
include 'db.php';  // Certifique-se de que o arquivo db.php está configurado corretamente

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['Nome'];
    $email = $_POST['email'];
    $senha = $_POST['Senha'];

    // Verificar se o campo de e-mail não está vazio
    if (empty($email)) {
        echo "O campo de e-mail não pode estar vazio!";
        exit;
    }

    // Verificar se o e-mail já está registrado no banco de dados
    $sql_check_email = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $mysqli->prepare($sql_check_email);
    $stmt->bind_param("s", $email); // Evita SQL injection
    $stmt->execute();
    $result = $stmt->get_result();

    // Se o e-mail já existir, não permite o cadastro
    if ($result->num_rows > 0) {
        echo "Este e-mail já está em uso. Tente outro e-mail.";
        exit;
    }

    // Criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir os dados na tabela usuarios
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    // Verificar se o cadastro foi bem-sucedido
    if ($stmt->execute()) {
        header("Location: index.php");  // Redireciona após o cadastro bem-sucedido
        exit;
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;  // Exibe erro se houver
    }

    // Fechar a conexão
    $stmt->close();
    $mysqli->close();
}
?>
