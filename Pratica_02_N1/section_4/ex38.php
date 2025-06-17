<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 38</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex37.php">← Voltar exercício</a>
    <a class="proximo" href="ex39.php">Próximo exercício →</a>
    
    <div class="container">
        <h2>Exercício 38 – Formatação de Preços</h2>
        <div class="saida-php">
            <?php
            function formatarPreco($valor)
            {
                return "R$ " . number_format($valor, 2, ",", ".");
            }
            echo formatarPreco(1234.56);
            ?>
        </div>
    </div>
</body>

</html>