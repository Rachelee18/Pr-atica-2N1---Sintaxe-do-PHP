<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício – Custo Total da Construção</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <a class="voltar" href="ex05.php">← Voltar exercício</a>
    <a class="proximo" href="ex07.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 06 – Custo Total da Construção</h2>

        <div class="saida-php">
            <?php
                $custoMaterial = 3750;
                $custoMaoDeObra = 10000; 
                $custoTotal = $custoMaterial + $custoMaoDeObra;
                echo "O valor total para construção é: $custoTotal!";
            ?>
        </div>
    </div>

</body>
</html>
