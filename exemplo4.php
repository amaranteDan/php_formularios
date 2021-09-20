<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $nome = $_POST['nome'] ?? null;
   $nome = trim($nome);//trim aqui elimina espaços em branco
   $nome = stripslashes($nome);// remove / em caso de invasao e alterar url
   $nome = htmlspecialchars($nome);//evitar a injeção de codigo html no site 
   var_dump($nome);
    exit; //Para a execução
};
/**
 * Como o htmlspecialchars trata os caracteres
 * < &lt
 * > &gt
 * " &quote
 * ' &#039
 * & &amp
 */
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
        <input type="submit" value="enviar">
    </form>
</body>
</html>