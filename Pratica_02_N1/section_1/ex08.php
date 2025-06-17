<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício – Alteração de Código</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <a class="voltar" href="ex07.php">← Voltar exercício</a>
    <a class="proximo" href="ex09.php">Próximo exercício →</a>

    <div class="container1">
        <h2>Exercício 08 – Alteração de Código</h2>

        <div class="saida-php">
            <?php
                $codigo = "00FF00";
                echo "O código antes é: ", $codigo;
                $codigo = "B57170";
                echo "<br>O código depois é: ", $codigo;
            ?>
        </div>
    </div>

</body>
</html>
