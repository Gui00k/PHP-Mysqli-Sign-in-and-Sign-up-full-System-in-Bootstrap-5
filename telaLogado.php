<?php

    //iniciando sessao
    session_start();
    include_once('config.php');
    //validando se o usuario esta logado
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) 
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
       
    </style>
</head>
<body>
    
    <br>
    <?php
        //mostrando o usuario logado na tela
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>

</body>

</html>