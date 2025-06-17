<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 24</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex23.php">← Voltar exercício</a>
    <a class="proximo" href="ex25.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 24 – Processamento Limitado</h2>
        <div class="saida-php">
            <?php
                for ($i = 1; $i <= 100; $i++) {
                    if ($i > 50) break;
                    echo "Processando item $i<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>