<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 21</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="../index.php">← Voltar exercício</a>
    <a class="proximo" href="ex22.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 21 – Contagem de 1 a 10</h2>
        <div class="saida-php">
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "Número: $i<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>
