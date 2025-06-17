<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 20 - Verificação de Acesso</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex19.php">← Voltar exercício</a>
    <a class="proximo" href="../index.php">Voltar pra Seções →</a>

    <div class="container">
        <h2>Exercício 20 - Verificação de Acesso</h2>

        <div class="saida-php">
            <?php
                $usuarioAtivo = true;
                $permissaoAdmin = true;

                if ($usuarioAtivo && $permissaoAdmin) {
                    echo "<p class='aprovado'>Acesso Total Concedido</p>";
                } else {
                    echo "<p class='reprovado'>Acesso Negado</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
