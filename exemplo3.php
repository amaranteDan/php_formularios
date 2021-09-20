<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //$idade = (isset($_POST['idade'])) ? $_POST['idade'] : null;
    
    //null coalescing operator - POde ser usado no php 7
    $idade = $_POST['idade'] ?? null;//valor nulo ou se não existir
    if(is_null($idade) || $idade === ''){
        die('Voce não informou a sua idade');
    }
    $idade = (int)$idade;

    if($idade < 18){
        die('Voce não tem permissaõ de rodar o script');

    }

    $idade_string = (float)$idade;// Pode converter para boolean, object ...
    var_dump($idade_string, $idade);

    echo 'Ok, sua idade é' . $idade;
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
    <form action="index.php" method="post">
        <input type="text" name="idade" placeholder="idade">
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>