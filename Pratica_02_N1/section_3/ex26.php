<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 26</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex25.php">← Voltar exercício</a>
    <a class="proximo" href="ex27.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 26 – Entrada de Dados Repetitiva</h2>
        <div class="saida-php">
            <?php
                $entradas = [12, 45, 22, 0, 34];
                $i = 0;
                do {
                    echo "Entrada: " . $entradas[$i] . "<br>";
                    $i++;
                } while ($entradas[$i - 1] != 0);
            ?>
        </div>
    </div>
</body>
</html>
