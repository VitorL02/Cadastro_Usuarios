<?php

session_start();

    if((!isset ($_SESSION ['email']) == true)  and (!isset ($_SESSION['senha']) == true ))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location:login.php');
    }

    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/sistema.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo ao Sistema</title>
</head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:179, 0, 18;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bem vindo ao meu Primeiro Sistema PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="d-flex">
            <a href="sair.php" class = 'btn btn-danger'>Sair</a>
        </div>
    </nav>
    <br>
        <?php
            echo "<h1 class = 'white'>Bem vindo <u>$logado</u></h1>";
        ?>
    </body>
</html>