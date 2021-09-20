<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Formulario foi enviado pelo " . $_POST['nome'];
    //var_dump($_POST);
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
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="submit" value="enviar">
    </form>
    <a href="index.php">Pagina Inicial</a>
    <p>O <?php echo $_GET['nome']; ?> Clicou no link acima</p>
</body>
</html>