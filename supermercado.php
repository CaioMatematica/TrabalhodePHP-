<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - Soma - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>EXERCÍCIOS PHP</h1>
        <nav>
            <ul>
            <li class="Link"><a href="./index.html">Home</a></li>
         <li class="Link"><a href="soma.html">Soma</a></li>
         <li class="Link"><a href="triangulo.html">Triângulo</a></li>
         <li class="Link"><a href="Pizzaria.html">Pizzaria</a></li>
         <li class="Link"><a href="Media.html">Media</a></li>
         <li class="Link"><a href="Supermercado.html">Supermercado</a></li>
         <li class="Link"><a href="Salario.html">Salário</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="Resultado">
            <?php 
            $pp = $_POST['pp'];

            $pa = $pp + ($pp * 0.1);
            
            echo "O valor aumentado é:$pa";
            ?><br>
        </div>
    </main>
    
    <footer>
    <p>Caio e Cecília &copy 2023</p>
    
    </footer>
</body>
</html>