<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 29</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex28.php">← Voltar exercício</a>
    <a class="proximo" href="ex30.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 29 – Ciclo de Produção</h2>
        <div class="saida-php">
            <?php
                $producao = [];
                while (count($producao) < 5) {
                    $producao[] = "Unidade " . (count($producao) + 1);
                }
                foreach ($producao as $p) {
                    echo "$p produzida<br>";
                }
            ?>
        </div>
    </div>
    
</body>
</html>