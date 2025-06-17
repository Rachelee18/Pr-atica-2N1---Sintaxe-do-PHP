<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 19 - Cálculo de Salário</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <a class="voltar" href="ex18.php">← Voltar exercício</a>
    <a class="proximo" href="ex20.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 19 - Cálculo de Salário</h2>

        <div class="saida-php">
            <?php
                $cargo = "Gerente";

                switch ($cargo) {
                    case "Desenvolvedor": $salario = 5000; break;
                    case "Designer": $salario = 4000; break;
                    case "Gerente": $salario = 7000; break;
                    default: $salario = 0;
                }

                echo "<p>Salário para o cargo de $cargo: R$ $salario</p>";
            ?>
        </div>
    </div>

</body>
</html>
