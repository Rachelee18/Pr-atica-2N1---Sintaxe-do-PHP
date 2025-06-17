<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12 - Classificação de Temperatura</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex11.php">← Voltar exercício</a>
    <a class="proximo" href="ex13.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 12 - Classifique a Temperatura</h2>

        <form method="post" style="text-align: center;">
            Temperatura (°C): <input type="number" step="0.1" name="temp" required>
            <input type="submit" value="Classificar">
        </form>

        <div class="saida-php">
            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $temp = $_POST["temp"];
                    if ($temp > 0) {
                        echo "<p style='color: green;'>Temperatura Positiva</p>";
                    } elseif ($temp < 0) {
                        echo "<p style='color: red;'>Temperatura Negativa</p>";
                    } else {
                        echo "<p style='color: gray;'>Temperatura Zero</p>";
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>
