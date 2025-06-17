<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício – Valor de Pi</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <a class="voltar" href="ex08.php">← Voltar exercício</a>
    <a class="proximo" href="ex10.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 09 – Valor de Pi</h2>

        <div class="saida-php">
            <?php
                $pi = 3.141592;
                echo "O valor de Pi em 4 casas decimais é: ", round($pi, 4);
            ?>
        </div>
    </div>

</body>
</html>
