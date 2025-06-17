<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 27</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex26.php">← Voltar exercício</a>
    <a class="proximo" href="ex28.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 27 – Listagem de Participantes</h2>
        <div class="saida-php">
            <?php
                $participantes = ["Ana", "Bruno", "Carlos", "Daniela", "Eduardo"];
                foreach ($participantes as $p) {
                    echo "Participante: $p<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>