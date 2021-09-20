<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump(empty($_POST['nome']));//isset verifica se o campo existe e o empyt verifica se esta vazio
  
    exit; //Para a execução
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
        <input type="number" name="idade">
        <input type="submit" value="enviar">
    </form>
</body>
</html>