<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 28</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex27.php">← Voltar exercício</a>
    <a class="proximo" href="ex29.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 28 – Total de Vendas</h2>
        <div class="saida-php">
            <?php
                $total = 0;
                for ($dia = 1; $dia <= 100; $dia++) {
                    $venda = rand(500, 5000) / 100;
                    $total += $venda;
                }
                echo "Total de vendas no mês: R$ " . number_format($total, 2, ",", ".");
            ?>
        </div>
    </div>
</body>
</html>