<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício – Tipo da Variável</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <a class="voltar" href="ex04.php">← Voltar exercício</a>
    <a class="proximo" href="ex06.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 05 – Tipo da Variável</h2>

        <div class="saida-php">
            <?php
                $valor = 2.5;
                $tipo = gettype($valor);
                echo "O tipo da variável é: $tipo!";
            ?>
        </div>
    </div>

</body>
</html>
