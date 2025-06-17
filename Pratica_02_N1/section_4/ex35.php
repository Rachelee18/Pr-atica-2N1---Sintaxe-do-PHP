<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 35</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex34.php">← Voltar exercício</a>
    <a class="proximo" href="ex36.php">Próximo exercício →</a>
    
    <div class="container">
        <h2>Exercício 35 – Validação de Código</h2>
        <div class="saida-php">
            <?php
            function ehPar($codigo)
            {
                return $codigo % 2 == 0;
            }
            $codigo = 127;
            echo "Código $codigo é " . (ehPar($codigo) ? "par" : "ímpar");
            ?>
        </div>
    </div>
</body>

</html>