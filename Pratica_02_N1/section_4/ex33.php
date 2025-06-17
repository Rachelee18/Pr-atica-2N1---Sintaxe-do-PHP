<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 33</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex32.php">← Voltar exercício</a>
    <a class="proximo" href="ex34.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 33 – Cálculo de Custo Total</h2>
        <div class="saida-php">
            <?php
            function calcularCusto($preco, $quantidade)
            {
                return $preco * $quantidade;
            }
            echo "Total: R$ " . number_format(calcularCusto(25.5, 4), 2, ",", ".");
            ?>
        </div>
    </div>
</body>

</html>