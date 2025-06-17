<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 39</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex38.php">← Voltar exercício</a>
    <a class="proximo" href="ex40.php">Próximo exercício →</a>
    
    <div class="container">
        <h2>Exercício 39 – Cálculo de Área de Terreno</h2>
        <div class="saida-php">
            <?php
            function areaTerreno($largura, $comprimento)
            {
                return $largura * $comprimento;
            }
            echo "Área: " . areaTerreno(10, 30) . " m²";
            ?>
        </div>
    </div>
</body>

</html>