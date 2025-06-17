<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 25</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a class="voltar" href="ex24.php">← Voltar exercício</a>
    <a class="proximo" href="ex26.php">Próximo exercício →</a>

    <div class="container">
        <h2>Exercício 25 – Relatório de Alunos</h2>
        <div class="saida-php">
            <?php
                $alunos = [
                    ["1001", "Ana Lima", 8.5],
                    ["1002", "Bruno Souza", 7.8],
                    ["1003", "Carlos Silva", 9.2],
                    ["1004", "Daniela Costa", 6.7],
                    ["1005", "Eduardo Alves", 5.9],
                    ["1006", "Fernanda Dias", 7.0],
                    ["1007", "Gustavo Rocha", 8.1],
                    ["1008", "Helena Luz", 9.0],
                    ["1009", "Isabela Cruz", 6.5],
                    ["1010", "João Pedro", 7.3]
                ];

                echo "<table border='1' style='margin: 0 auto; border-collapse: collapse;'>";
                echo "<tr><th>Matrícula</th><th>Nome</th><th>Nota</th></tr>";
                foreach ($alunos as $aluno) {
                    echo "<tr><td>$aluno[0]</td><td>$aluno[1]</td><td>$aluno[2]</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
    </div>
</body>
</html>