<?php 
include('conexao.php');
session_start();


$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta = "SELECT * FROM `usuário` WHERE email = '{$email}' and senha = ('{$senha}')";

$result = mysqli_query($conexao,$consulta);

$valido = mysqli_num_rows($result);

if($valido == 1){
    $_SESSION['email'] = $email;
    header("Location: benvindo.php");
    exit();
}else{
    header("Location: index.php");
    exit();
}