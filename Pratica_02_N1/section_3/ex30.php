<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 30</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <a class="voltar" href="ex29.php">← Voltar exercício</a>
    <a class="proximo" href="../index.php">Voltar pra Seções →</a>

    <div class="container">
        <h2>Exercício 30 – Tabuadas de 1 a 5</h2>
        <div class="saida-php">
            <?php
            echo "<table><caption>Tabuadas de 1 a 5</caption><tr>";
            for ($i = 1; $i <= 5; $i++) {
                echo "<th>Tabuada do $i</th>";
            }
            echo "</tr><tr>";
            for ($linha = 1; $linha <= 10; $linha++) {
                for ($coluna = 1; $coluna <= 5; $coluna++) {
                    echo "<td>$coluna x $linha = " . ($coluna * $linha) . "</td>";
                }
                echo "</tr><tr>";
            }
            echo "</tr></table>";
            ?>
        </div>
    </div>
</body>

</html>