<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 50 – Sistema de Template</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <a class="voltar" href="ex49.php">← Voltar exercício</a>
    <a class="proximo" href="../index.php">Voltar pra Seções →</a>

    <div class="container">
        <h2>Exercício 50 – Template com Espaços Reservados</h2>

        <?php
            $titulo = "Página de Exemplo com Template";
            $conteudo = "Este conteúdo foi definido dinamicamente usando variáveis PHP e incluído através de um template externo.";
            include("template.php");
        ?>
    </div>

</body>
</html>