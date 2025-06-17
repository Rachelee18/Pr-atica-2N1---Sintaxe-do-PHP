<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 40</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <a class="voltar" href="ex39.php">← Voltar exercício</a>
    <a class="proximo" href="../index.php">Voltar pra Seções →</a>
    
    <div class="container">
        <h2>Exercício 40 – Log de Eventos</h2>
        <div class="saida-php">
            <?php
            function registrarLog($mensagem)
            {
                $timestamp = date("Y-m-d H:i:s");
                return "[$timestamp] - $mensagem";
            }
            echo registrarLog("Usuário acessou a página.");
            ?>
        </div>
    </div>
</body>

</html>