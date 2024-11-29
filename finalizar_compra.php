<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar compra</title>
    <link rel="icon" href="icon.png">
</head>
<body>
    <div>
        <h1 id="titulo">FINALIZAR COMPRA</h1>
        <p id="subtitulo">Complete suas informações</p>
        <br>
    </div>
    <form>
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div>
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>

        <div class="campo">
            <label for="cpf">CPF</label>
                <input type="number" name="cpf" id="cpf" required>
        </div>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="campo">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" required>
            </div>

            <div class="campo">
                <label for="nendereco">Número</label>
                <input type="number" name="numero" id="numero" required>
            </div>
            <div class="campo">
                <label for="cep">Cep </label>
                <input type="number" name="cep" id="cep" required>
                
                </div>
            <div class="campo">
                <label for="pagamento">Formas de pagamento</label>
                <label>
                    <input type="radio" name="pagamento" value="pix" >Pix
                </label>
                <label>
                    <input type="radio" name="pagamento" value="cartao">Cartão
                </label>
            </div>
            <button>
                <a href="index.php">Concluir</a>
            </button>
            
    </form>
</body>
</html>