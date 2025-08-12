<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Seja Bem-vindo</title>
</head>
<body>
       

    <?php
    
        $name =  $_GET["name"] ?? "Sem nome";
        $sobrename = $_GET["sobrename"] ?? "Sem sobrenome";
    
        if (empty($name) || empty($sobrename)){

            echo "<p>Por favor preencha o formulário</p>";
            
        } else {

            echo "<h1>Login Feito!!!</h1>";

            echo "<p>Seja muito bem-vindo <strong>$name $sobrename</strong> ao nosso site!</p>";
        };    

        echo '<a href="javascript:history.back(-1)">Voltar</a>';
        
    ?>


</body>
</html>