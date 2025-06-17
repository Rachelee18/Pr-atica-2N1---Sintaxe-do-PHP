<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 16 - Estado Civil</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex15.php">← Voltar exercício</a>
    <a class="proximo" href="ex17.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 16 - Estado Civil</h2>

        <div class="saida-php">
            <?php
                $estadoCivil = "D";

                switch ($estadoCivil) {
                    case "C": echo "<p>Casado(a)</p>"; break;
                    case "S": echo "<p>Solteiro(a)</p>"; break;
                    case "D": echo "<p>Divorciado(a)</p>"; break;
                    case "O": echo "<p>Outro</p>"; break;
                    default: echo "<p>Código inválido</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
