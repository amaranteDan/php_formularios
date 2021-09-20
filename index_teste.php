<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_GET);
    var_dump($_POST);
    var_dump($_REQUEST);//Verifica e pega os dados get e post
    exit; //Para a execução
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
    <form action="index.php?page=sobre-nos" method="post">
        <input type="text" name="nome">
        <input type="submit" value="enviar">
    </form>
   
   
</body>
</html>