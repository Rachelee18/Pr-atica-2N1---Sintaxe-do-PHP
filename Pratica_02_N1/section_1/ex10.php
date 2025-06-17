<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício – Texto IFCE</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="um">

    <a class="voltar" href="ex09.php">← Voltar exercício</a>
    <a class="proximo" href="../index.php">Voltar pra Seções →</a>

    <div class="container">
        <h2 class="h2">Exercício 10 – Texto IFCE</h2>

        <div class="saida-php1">
            <?php
                $texto = "O Instituto Federal do Ceará (IFCE) é uma instituição de ensino que se destaca pela qualidade acadêmica, pesquisa e extensão, contribuindo significativamente para o desenvolvimento educacional e tecnológico do estado. Oferecendo cursos técnicos, de graduação e pós-graduação, o IFCE promove a formação de profissionais qualificados e incentiva a inovação em diversas áreas do conhecimento. Sua atuação abrange múltiplos campi, permitindo maior acesso à educação de qualidade para estudantes de diferentes localidades. Além disso, o instituto mantém projetos de pesquisa e extensão que fortalecem o vínculo com a comunidade e estimulam o desenvolvimento socioeconômico. Por meio de uma abordagem interdisciplinar e da valorização da inclusão, o IFCE se consolida como referência no ensino público, preparando cidadãos críticos e capacitados para os desafios do mercado de trabalho e da sociedade. Sua infraestrutura moderna e equipe qualificada garantem um ambiente propício ao aprendizado e à troca de conhecimentos, reforçando sua missão de proporcionar uma educação transformadora e acessível.<br>";
                echo $texto;
                $count = strlen($texto);
                echo "<br>O total de caracteres é: ", $count;
            ?>
        </div>
    </div>

</body>
</html>
