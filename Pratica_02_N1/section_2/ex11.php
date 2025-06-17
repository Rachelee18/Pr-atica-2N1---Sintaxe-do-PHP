<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11 - Controle de Acesso</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="../index.php">← Voltar pra Seções</a>
    <a class="proximo" href="ex12.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 11 - Verifique seu acesso</h2>

        <form class ="Age" method="post" style="text-align: center;">
            <h3 class="age">Idade:</h3>
            <input type="number" name="idade" required>
            <input type="submit" value="Verificar">
        </form>

        <div class="saida-php">
            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $idade = $_POST["idade"];
                    if ($idade >= 18) {
                        echo "<p style='color: green;'>Acesso Liberado</p>";
                    } else {
                        echo "<p style='color: red;'>Acesso Negado</p>";
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>
