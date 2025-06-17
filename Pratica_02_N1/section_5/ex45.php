<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 45</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <a class="voltar" href="ex44.php">← Voltar exercício</a>
    <a class="proximo" href="ex46.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 45 - Biblioteca de Funções</h2>
        <div class="saida-php">
            <?php
            include("medias.php");
            echo "Média: " . calcularMedia([7, 8, 9]);
            echo "<br>Preço formatado: " . formatarPreco(1299.9);
            ?>
        </div>
    </div>
</body>

</html>