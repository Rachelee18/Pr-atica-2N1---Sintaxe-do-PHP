<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício – Status do Pedido</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <a class="voltar" href="ex03.php">← Voltar exercício</a>
    <a class="proximo" href="ex05.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 04 – Status do Pedido</h2>

        <div class="saida-php">
            <?php
                $estado = true;
                if ($estado) {
                    echo "O pedido foi aceito!";
                } else {
                    echo "O pedido foi negado!";
                }
            ?>
        </div>
    </div>

</body>
</html>
