<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   extract($_POST);//exporta os dados direto para as variaveis.
   //verificar o mesmo para filter_var e filter_var_array
    var_dump($nome, $idade);

    $data = compact('nome', 'idade');// extrai um dado e converte em array
    exit; 
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="text" name="idade">
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>