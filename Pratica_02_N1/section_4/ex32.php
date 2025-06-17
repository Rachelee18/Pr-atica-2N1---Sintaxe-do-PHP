<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 32</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex31.php">← Voltar exercício</a>
    <a class="proximo" href="ex33.php">Próximo exercício →</a>
    
    <div class="container">
        <h2>Exercício 32 – Calculadora Básica</h2>
        <div class="saida-php">
            <?php
            function somar($a, $b)
            {
                return $a + $b;
            }
            echo "3 + 7 = " . somar(3, 7);
            ?>
        </div>
    </div>
</body>

</html>