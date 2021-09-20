<?php

session_start();
$_SESSION['csrf_token'] = sha1(rand(1, 20000));

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
    <form action="send.php" method="post">
        <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <label for="fname">First name:</label><br>
        <input name="nome" type="text" placeholder="Nome"><br>
        <label for="femail">Email:</label><br>
        <input name="email" type="text" placeholder="Email"><br>
        <label for="fdescricao">Descrição:</label><br>
        <textarea name="descricao" placeholder="Descrição"></textarea><br>
        <img src="captcha.php">
        <input name="_captcha" type="text" placeholder="Digite as letras acima">
        <input type="submit" value="Enviar">
    
    </form>
</body>
</html>