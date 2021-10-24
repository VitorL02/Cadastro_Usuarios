<?php
    session_start();

    // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];



        $sql = "SELECT email_usuario,senha_usuario FROM tb_usuarios WHERE email_usuario = '$email' and senha_usuario = '$senha' ";
        
        // Realiza a query no banco de dados
        $result = $conexao ->query($sql);

        if(mysqli_num_rows($result) < 1 ){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
           header('Location:login.php');
        }

        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location:sistema.php');
        }
    
    }

    else{
        //Redireciona pra pagina de login caso não exista nenhum submit
        header('Location:login.php');
    }


?>