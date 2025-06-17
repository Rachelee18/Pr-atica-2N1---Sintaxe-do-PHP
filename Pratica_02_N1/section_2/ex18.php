<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 18 - Cor de Tema</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex17.php">← Voltar exercício</a>
    <a class="proximo" href="ex19.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 18 - Cor de Tema</h2>

        <div class="saida-php">
            <?php
                $cor = "Roxo";

                if ($cor == "Vermelho" || $cor == "Azul" || $cor == "Verde") {
                    echo "<p>Você escolheu a cor $cor.</p>";
                } else {
                    echo "<p>Cor não disponível. Sugerimos a cor Azul.</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
