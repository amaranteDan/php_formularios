<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);//
   /**
    * ja verifica o campo e valida sem o ternario
    * e faz o mesmo que o htmlspecialchars
    * e sem contar que economiza linhas de codigo
    * pesquisar tipos de filtro no php
    */
   $data = filter_input_array(INPUT_POST, FILTER_VALIDATE_EMAIL);//ja pega varios dados ao mesmo tempo.
   var_dump($nome);
   var_dump($idade);
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
        <input type="number" name="idade">
        <input type="submit" value="enviar">
    </form>
</body>
</html>