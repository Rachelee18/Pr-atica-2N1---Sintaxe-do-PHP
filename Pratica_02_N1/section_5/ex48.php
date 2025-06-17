<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 48 – Require vs Require_once</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

    <a class="voltar" href="ex47.php">← Voltar exercício</a>
    <a class="proximo" href="ex49.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 48 – Prevenção de Redefinição de Funções</h2>

        <div class="saida-php">
            <?php
                require_once("funcoes.php");
                require_once("funcoes.php");

                echo saudacao();
            ?>
        </div>
    </div>

</body>
</html>