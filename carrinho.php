<?php
session_start();

$carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="carrinho.css">
    <link rel="icon" href="icon.png">
</head>
<body>
    <header>
        <div class="logo">
            <h1>MAISON I</h1>
        </div>
    </header>

    <section class="carrinho">
        <h2>Seu Carrinho</h2>
        <div class="carrinho-lista">
            <?php if (empty($carrinho)): ?>
                <p>O carrinho está vazio!</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                    </tr>
                    <?php foreach ($carrinho as $item): ?>
                        <tr>
                            <td><?php echo $item['nome']; ?></td>
                            <td>R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></td>
                            <td><?php echo $item['quantidade']; ?></td>
                            <td>R$ <?php echo number_format($item['preco'] * $item['quantidade'], 2, ',', '.'); ?></td>
                        </tr>
                        <?php $total += $item['preco'] * $item['quantidade']; ?>
                    <?php endforeach; ?>
                </table>
                <h3>Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></h3>
                <a href="finalizar_compra.php"><button>Finalizar Compra</button></a>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>
