<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 34</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex33.php">← Voltar exercício</a>
    <a class="proximo" href="ex35.php">Próximo exercício →</a>
    
    <div class="container">
        <h2>Exercício 34 – Média de Notas</h2>
        <div class="saida-php">
            <?php
            function calcularMedia($notas)
            {
                return array_sum($notas) / count($notas);
            }
            $notas = [8, 7.5, 9, 6.5];
            echo "Média final: " . number_format(calcularMedia($notas), 2);
            ?>
        </div>
    </div>
</body>

</html>