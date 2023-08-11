<?php 
session_start();
$conectado = $_SESSION['email'];
if(!$conectado){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>
</head>
<body>
    <h1>Conectado com sucesso</h1>
    <?php 
    echo($_SESSION['email']);
    ?>
    <br>
    <a href='logout.php'>sair</a>
</body>
</html>