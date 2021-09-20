<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    var_dump($_POST);
    var_dump($_FILES);
    
};//Para verificar se e via get/post
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
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fname">Nome:</label><br>
        <input type="text"  name="nome"><br>
        <label for="fname">Email:</label><br>
        <input type="email" name="email"><br>
        <label for="fname">Color:</label><br>
        <input type="color" name="color"><br>
        <label for="fname">Data:</label><br>
        <input type="date" name="date"><br>
        <label for="fname">Datetime:</label><br>
        <input type="datetime" name="datetime"><br>
        <label for="fname">Escolha o arquivo:</label><br>
        <input type="file" name="file"><br>
        <label for="fname">Digite um numero:</label><br>
        <input type="number" name="number"><br>
        
        <label for="fname">Valor1:</label><br>
        <input type="radio" name="radio" value="valor 1"><br>
        <label for="fname">Valor2:</label><br>
        <input type="radio" name="radio" value="valor 2"><br>
        <label for="fname">Valor3:</label><br>
        <input type="radio" name="radio" value="valor 3"><br>

        <input type="checkbox" name="checkbox" value="checked">

        <input type="submit" value="enviar">


    </form>
    
</body>
</html>