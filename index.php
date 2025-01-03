<?php
session_start();

$produtos = [
    ['nome' => 'Conjunto Rosa', 'preco' => 240.00, 'imagem' => 'conjunto_rosa.png'],
    ['nome' => 'Conjunto White', 'preco' => 280.00, 'imagem' => 'conjunto_white.png'],
    ['nome' => 'Cropped', 'preco' => 129.99, 'imagem' => 'cropped.png'],
    ['nome' => 'Vestido White', 'preco' => 150.00, 'imagem' => 'vestido_white.png'],
    ['nome' => 'Vestido de Paete', 'preco' => 180.00, 'imagem' => 'vestido.png'],
    ['nome' => 'Macacão Longo', 'preco' => 220.00, 'imagem' => 'macacao_verde.png'],
    ['nome' => 'Macacão White', 'preco' => 220.00, 'imagem' => 'macacao_white.png'],
    ['nome' => 'Vestido Drapeado', 'preco' => 170.00, 'imagem' => 'vestido_drapeado.png'],
    ['nome' => 'Vestido Flower', 'preco' => 240.00, 'imagem' => 'vestido_flores.png'],
    ['nome' => 'Body Lurex', 'preco' => 100.00, 'imagem' => 'body.png'],
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison I</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>MAISON I</h1>
        </div>
        <div id="dov">
            <img src="icon.png" align-item="center" height="60px">
        </div>
        <nav>
            <ul>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="login.php">Cadastro</a></li>
                <li><a href="https://www.instagram.com/maison_mi/" target="_blank">Instagram</a></li>
                <li><a href="https://wa.me/5583998010622?text=Oii%2C%20gostaria%20de%20ver%20o%20cat%C3%A1logo%20dispon%C3%ADvel%20" target="_blank">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="produtos">
        <h2>Produtos</h2>
        <div class="produtos-lista">
            <?php foreach ($produtos as $produto): ?>
                <div class="produto">
                    <img src="images/<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                    <h3><?php echo $produto['nome']; ?></h3>
                    <p>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <form action="adicionar_carrinho.php" method="POST">
                        <input type="hidden" name="produto_id" value="<?php echo $produto['nome']; ?>">
                        <input type="hidden" name="produto_nome" value="<?php echo $produto['nome']; ?>">
                        <input type="hidden" name="produto_preco" value="<?php echo $produto['preco']; ?>">
                        <button type="submit">Adicionar ao Carrinho</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
