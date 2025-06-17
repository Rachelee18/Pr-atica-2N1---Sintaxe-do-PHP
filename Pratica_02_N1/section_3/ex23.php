<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 23</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex22.php">← Voltar exercício</a>
    <a class="proximo" href="ex24.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 23 – Preparando para lançamento</h2>
        <div class="saida-php">
            <?php
                for ($i = 5; $i >= 1; $i--) {
                    echo "Lançamento em: $i<br>";
                }
                echo "<strong>Lançado!</strong>";
            ?>
        </div>
    </div>
</body>
</html>