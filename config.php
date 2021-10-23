<?php

    $dbHost = 'localhost:4040';
    $dbUsername = 'VitorLucas';
    $dbPassword = 'Vi123456';
    $dbName = 'usuarios';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno ){

    //     echo "Erro";
    // }
    // else{
        
    //     echo "Conectado com Sucesso";
    // } Teste De conexão


?>

