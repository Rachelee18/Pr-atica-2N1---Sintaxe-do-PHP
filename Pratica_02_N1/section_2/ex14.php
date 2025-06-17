<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 14 - Agendamento Semanal</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex13.php">← Voltar exercício</a>
    <a class="proximo" href="ex15.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 14 - Agendamento Semanal</h2>

        <div class="saida-php">
            <?php
                $dia = 4;

                switch ($dia) {
                    case 1: echo "<p>Domingo</p>"; break;
                    case 2: echo "<p>Segunda-feira</p>"; break;
                    case 3: echo "<p>Terça-feira</p>"; break;
                    case 4: echo "<p>Quarta-feira</p>"; break;
                    case 5: echo "<p>Quinta-feira</p>"; break;
                    case 6: echo "<p>Sexta-feira</p>"; break;
                    case 7: echo "<p>Sábado</p>"; break;
                    default: echo "<p>Dia inválido</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
