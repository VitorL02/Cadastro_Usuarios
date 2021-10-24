<?php

include_once('config.php');

    if(isset ($_POST['update']))
    {
        $id = $_POST['id'];
        $nome =  $_POST ['nome'];
        $email = $_POST ['email'];
        $telefone = $_POST ['telefone'];
        $genero = $_POST ['genero'];
        $data_nascimento = $_POST ['data_nascimento'];
        $estado = $_POST ['estado'];
        $cidade = $_POST ['cidade'];
        $senha = $_POST ['senha'];

        $sqlUpdate = "UPDATE tb_usuarios SET nome_usuario = '$nome',email_usuario = '$email', telefone_usuario = '$telefone', sexo_usuario = '$genero', data_nascimento = '$data_nascimento', estado = '$estado', cidade = '$cidade', senha_usuario = '$senha' WHERE usuario_id = '$id' ";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location:sistema.php');

?>