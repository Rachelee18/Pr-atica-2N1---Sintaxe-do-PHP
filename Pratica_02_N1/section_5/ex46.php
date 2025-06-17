<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 46 – Include vs Require</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

    <a class="voltar" href="ex45.php">← Voltar exercício</a>
    <a class="proximo" href="ex47.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 46 – Tratamento de Arquivos Essenciais</h2>

        <div class="saida-php">
            <h3>🔹 Usando include:</h3>
            <?php
                include("config_inexistente.php");

                echo "<p> O script CONTINUOU mesmo com o include falhando.</p>";
            ?>

            <hr>

            <h3>🔸 Usando require:</h3>
            <?php
                require("config_inexistente.php");

                echo "<p> Esta linha NUNCA será exibida, pois o require acima para a execução.</p>";
            ?>
        </div>
    </div>

</body>
</html>