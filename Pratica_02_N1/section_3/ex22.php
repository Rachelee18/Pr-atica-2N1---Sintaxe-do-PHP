<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 22</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex21.php">← Voltar exercício</a>
    <a class="proximo" href="ex23.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 22 – Números pares de 2 a 20</h2>
        <div class="saida-php">
            <?php
                for ($i = 2; $i <= 20; $i += 2) {
                    echo "Produto ID: $i<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>