<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prática 02N1 -- Menu Principal</title>
    <link rel="stylesheet" href="style.css">
    

    <script>
        function toggle(id) {
            const lista = document.getElementById(id);
            lista.style.display = lista.style.display === "none" ? "block" : "none";
        }
    </script>
</head>
<body>

    <h1>Atividades de Prática PHP -- IFCE</h1>
    <p>Escolha uma seção abaixo para visualizar os exercícios:</p>

    <div class="secao">
        <button class="toggle-btn" onclick="toggle('secao1')">Seção 1 – Variáveis e Tipos de Dados</button>
        <ul class="lista-exercicios" id="secao1">
            <li><a href="section_1/ex01.php">Exercício 01</a></li>
            <li><a href="section_1/ex02.php">Exercício 02</a></li>
            <li><a href="section_1/ex03.php">Exercício 03</a></li>
            <li><a href="section_1/ex04.php">Exercício 04</a></li>
            <li><a href="section_1/ex05.php">Exercício 05</a></li>
            <li><a href="section_1/ex06.php">Exercício 06</a></li>
            <li><a href="section_1/ex07.php">Exercício 07</a></li>
            <li><a href="section_1/ex08.php">Exercício 08</a></li>
            <li><a href="section_1/ex09.php">Exercício 09</a></li>
            <li><a href="section_1/ex10.php">Exercício 10</a></li>
        </ul>
    </div>

    <div class="secao">
        <button class="toggle-btn" onclick="toggle('secao2')">Seção 2 – Estruturas Condicionais</button>
        <ul class="lista-exercicios" id="secao2">
            <li><a href="section_2/ex11.php">Exercício 11</a></li>
            <li><a href="section_2/ex12.php">Exercício 12</a></li>
            <li><a href="section_2/ex13.php">Exercício 13</a></li>
            <li><a href="section_2/ex14.php">Exercício 14</a></li>
            <li><a href="section_2/ex15.php">Exercício 15</a></li>
            <li><a href="section_2/ex16.php">Exercício 16</a></li>
            <li><a href="section_2/ex17.php">Exercício 17</a></li>
            <li><a href="section_2/ex18.php">Exercício 18</a></li>
            <li><a href="section_2/ex19.php">Exercício 19</a></li>
            <li><a href="section_2/ex20.php">Exercício 20</a></li>
        </ul>
    </div>

    <div class="secao">
        <button class="toggle-btn" onclick="toggle('secao3')">Seção 3 – Estruturas de Repetição</button>
        <ul class="lista-exercicios" id="secao3">
            <li><a href="section_3/ex21.php">Exercício 21</a></li>
            <li><a href="section_3/ex22.php">Exercício 22</a></li>
            <li><a href="section_3/ex23.php">Exercício 23</a></li>
            <li><a href="section_3/ex24.php">Exercício 24</a></li>
            <li><a href="section_3/ex25.php">Exercício 25</a></li>
            <li><a href="section_3/ex26.php">Exercício 26</a></li>
            <li><a href="section_3/ex27.php">Exercício 27</a></li>
            <li><a href="section_3/ex28.php">Exercício 28</a></li>
            <li><a href="section_3/ex29.php">Exercício 29</a></li>
            <li><a href="section_3/ex30.php">Exercício 30</a></li>
        </ul>
    </div>

    <div class="secao">
        <button class="toggle-btn" onclick="toggle('secao4')">Seção 4 – Funções</button>
        <ul class="lista-exercicios" id="secao4">
            <li><a href="section_4/ex31.php">Exercício 31</a></li>
            <li><a href="section_4/ex32.php">Exercício 32</a></li>
            <li><a href="section_4/ex33.php">Exercício 33</a></li>
            <li><a href="section_4/ex34.php">Exercício 34</a></li>
            <li><a href="section_4/ex35.php">Exercício 35</a></li>
            <li><a href="section_4/ex36.php">Exercício 36</a></li>
            <li><a href="section_4/ex37.php">Exercício 37</a></li>
            <li><a href="section_4/ex38.php">Exercício 38</a></li>
            <li><a href="section_4/ex39.php">Exercício 39</a></li>
            <li><a href="section_4/ex40.php">Exercício 40</a></li>
        </ul>
    </div>

    <div class="secao">
        <button class="toggle-btn" onclick="toggle('secao5')">Seção 5 – HTML + PHP, Funções Nativas</button>
        <ul class="lista-exercicios" id="secao5">
            <li><a href="section_5/ex41.php">Exercício 41</a></li>
            <li><a href="section_5/ex42.php">Exercício 42</a></li>
            <li><a href="section_5/ex43.php">Exercício 43</a></li>
            <li><a href="section_5/ex44.php">Exercício 44</a></li>
            <li><a href="section_5/ex45.php">Exercício 45</a></li>
            <li><a href="section_5/ex46.php">Exercício 46</a></li>
            <li><a href="section_5/ex47.php">Exercício 47</a></li>
            <li><a href="section_5/ex48.php">Exercício 48</a></li>
            <li><a href="section_5/ex49.php">Exercício 49</a></li>
            <li><a href="section_5/ex50.php">Exercício 50</a></li>
        </ul>
    </div>

</body>
</html>
