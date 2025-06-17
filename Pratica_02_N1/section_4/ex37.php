<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 37</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex36.php">← Voltar exercício</a>
    <a class="proximo" href="ex38.php">Próximo exercício →</a>
    
    <div class="container">
        <h2>Exercício 37 – Saudação Personalizada</h2>
        <div class="saida-php">
            <?php
            function saudar($nome)
            {
                return "Olá, $nome! Seja bem-vindo(a).";
            }
            echo saudar("Olinda!");
            ?>
        </div>
    </div>
</body>

</html>