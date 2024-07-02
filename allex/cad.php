<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
    <div class="container">
        <button id="toggle-theme">Alternar Tema</button>
    </div>
    <script src="index.js"></script>
    <h1>resultados</h1>
</header>
    <main>
    <?php 
           
           
           // Iniciar o buffer de saída
            ob_start();
            var_dump($_POST);
            // Capturar e descartar a saída
            ob_end_clean();

           
            //criação do banco de dados mysql
            $hostname="localhost";
            $bancodedados="bancodedados";

           
            $nome = $_POST['nome'];
            $c = $_POST['conteudo'];
            $m = $_POST['modelo'];
            $g = $_POST['geral'];
            
            //o preg_match é um conjunto de caracteres representado por [] 
            if ( preg_match('/^[a-zA-Zá-úÁ-Ú ]*$/', $nome )) {
                echo "<br/><strong>avaliação feita por $nome, nota de conteudo $c, nota de modelo $m, nota em geral $g</strong>";
            } else {
                echo "Erro: O nome não pode conter números ou caracteres especiais.<br>"; 
            }
            

        ?>

    </main>
</body>
</html>
