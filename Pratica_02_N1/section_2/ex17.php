<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 17 - Alerta Climático</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex16.php">← Voltar exercício</a>
    <a class="proximo" href="ex18.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 17 - Alerta Climático</h2>

        <div class="saida-php">
            <?php
                $temp = 28;

                if ($temp < 0) {
                    echo "<p class='reprovado'>Alerta de Gelo!</p>";
                } elseif ($temp <= 15) {
                    echo "<p>Clima Ameno</p>";
                } elseif ($temp <= 25) {
                    echo "<p>Clima Agradável</p>";
                } else {
                    echo "<p class='recuperacao'>Atenção: Calor Extremo!</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
