<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 15 - Escolha de Bebida</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex14.php">← Voltar exercício</a>
    <a class="proximo" href="ex16.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 15 - Escolha de Bebida</h2>

        <div class="saida-php">
            <?php
                $bebida = "Suco";

                switch ($bebida) {
                    case "Café":
                    case "Chá":
                    case "Suco":
                    echo "<p>Você escolheu $bebida.</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
