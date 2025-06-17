<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 47 – Arquivo de Configuração</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

    <a class="voltar" href="ex46.php">← Voltar exercício</a>
    <a class="proximo" href="ex48.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 47 – Configuração Única com include_once()</h2>

        <div class="saida-php">
            <?php
                include_once("config.php");

                echo "<p>Host: $host</p>";
                echo "<p>Usuário: $user</p>";
                echo "<p>Senha: $senha</p>";
            ?>
        </div>
    </div>

</body>
</html>