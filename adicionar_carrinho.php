<?php
session_start();

// Verifica se o carrinho já foi criado
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Verifica se o produto foi enviado
if (isset($_POST['produto_id'])) {
    $produto = [
        'id' => $_POST['produto_id'],
        'nome' => $_POST['produto_nome'],
        'preco' => $_POST['produto_preco'],
        'quantidade' => 1,  // Quantidade inicial é 1
    ];

    // Verifica se o produto já está no carrinho
    $encontrado = false;
    foreach ($_SESSION['carrinho'] as &$item) {
        if ($item['id'] == $produto['id']) {
            $item['quantidade'] += 1;  // Se já estiver no carrinho, aumenta a quantidade
            $encontrado = true;
            break;
        }
    }

    // Se não foi encontrado, adiciona ao carrinho
    if (!$encontrado) {
        $_SESSION['carrinho'][] = $produto;
    }
}

// Redireciona de volta para a página inicial
header("Location: index.php");
exit;
?>
