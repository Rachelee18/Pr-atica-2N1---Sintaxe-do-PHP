<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 36</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex35.php">← Voltar exercício</a>
    <a class="proximo" href="ex37.php">Próximo exercício →</a>
    
    <div class="container">
        <h2>Exercício 36 – Sistema de Elegibilidade</h2>
        <div class="saida-php">
            <?php
            function verificarElegibilidade($idade)
            {
                return $idade >= 18 ? "Maior de idade" : "Menor de idade";
            }
            echo verificarElegibilidade(17);
            ?>
        </div>
    </div>
</body>

</html>