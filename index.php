<?php
// Lista de produtos (poderia ser carregada de um banco de dados)
$produtos = [
    ['nome' => 'Camiseta Básica', 'preco' => 49.99, 'imagem' => 'camisa.png'],
    ['nome' => 'Jeans Masculino', 'preco' => 89.99, 'imagem' => 'jeans.png'],
    ['nome' => 'Vestido Estiloso', 'preco' => 129.99, 'imagem' => 'vestido.png'],
    ['nome' => 'Blusa de Frio', 'preco' => 99.99, 'imagem' => 'blusa.png'],
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.png">
</head>
<body>
    <header>
        <div class="logo">
            <h1>MAISON I</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="produtos">
        <h2></h2>
        <div class="produtos-lista">
            <?php foreach ($produtos as $produto): ?>
                <div class="produto">
                    <img src="images/<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                    <h3><?php echo $produto['nome']; ?></h3>
                    <p>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <a href="#">Adicionar ao Carrinho</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Maison I | Novos looks e um visual sem outro igual</p>
    </footer>
</body>
</html>
