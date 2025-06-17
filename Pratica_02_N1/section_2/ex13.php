<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13 - Sistema de Avaliação</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex12.php">← Voltar exercício</a>
    <a class="proximo" href="ex14.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 13 - Sistema de Avaliação</h2>

        <div class="saida-php">
            <?php
                $nota1 = 6;
                $nota2 = 7;
                $media = ($nota1 + $nota2) / 2;

                echo "<p>Média: $media</p>";

                if ($media >= 7) {
                    echo "<p style='color: green;'>Aprovado</p>";
                } elseif ($media >= 5) {
                    echo "<p style='color: orange;'>Recuperação</p>";
                } else {
                    echo "<p style='color: red;'>Reprovado</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
