<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - Soma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>EXERCÍCIOS PHP</h1>
        <nav>
            <ul>
         <li class="Link"><a href="./index.html">Home</a></li>
         <li class="Link"><a>Soma</a></li>
         <li class="Link"><a>Triângulo</a></li>
         <li class="Link"><a>Pizzaria</a></li>
         <li class="Link"><a>Media</a></li>
         <li class="Link"><a>Supermercado</a></li>
         <li class="Link"><a>Salário</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h3>Resultado</h3>
        <div class="Resultado">
            <?php 
            $n1 = $_POST['Valor1'];
            $n2 = $_POST['Valor2'];

            $r = $n1 + $n2;
            
            echo "O valor da soma é:$r";
            ?>
        </div>
    </main>
    
    <footer>
    <p>Caio e Cecília &copy 2023</p>
    
    </footer>
</body>
</html>