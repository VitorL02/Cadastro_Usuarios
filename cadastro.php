<?php


if(isset($_POST ['submit']))

{

    include_once ('config.php');

    $nome =  $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $genero = $_POST ['genero'];
    $data_nascimento = $_POST ['data_nascimento'];
    $estado = $_POST ['estado'];
    $cidade = $_POST ['cidade'];
    $senha = $_POST ['senha'];

    $result = mysqli_query($conexao, "INSERT INTO tb_usuarios(nome_usuario,email_usuario,telefone_usuario,sexo_usuario,data_nascimento,estado,cidade,senha_usuario) VALUES ('$nome','$email','$telefone','$genero','$data_nascimento','$estado','$cidade','$senha')");

    header('Location:login.php');
   
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro de Usuarios</title>
</head>
    <body>
        <a href="index.php">Voltar</a>
        <div id="container">
            <form action="cadastro.php" method="POST">
                <fieldset>
                    <legend><strong>Formulario de Cadastro</strong></legend>

                        <div class="inputbox">
                            <input type="text" name="nome" id="nome" class="input-user" required>
                            <label for="nome" class = "move-label" >Digite seu Nome Completo</label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="email" name="email" id="email" class="input-user" required>
                            <label for="email" class = "move-label">Digite seu Email </label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="tel" name="telefone" id="telefone" class="input-user" required>
                            <label for="telefone" class = "move-label" >Digite seu Telefone</label>
                        </div>
                   

                                <p>Sexo:</p>
                                <input type="radio" name="genero" id="feminino" value="feminino" required>
                                <label for="feminino">Feminino</label> <br>
                                <input type="radio" name="genero" id="masculino" value="masculino" required>
                                <label for="masculino">Masculino</label><br>
                                <input type="radio" name="genero" id="outros" value="outros" required>
                                <label for="outros">LGBTQIA+</label><br> <br>
                            
                            <label for="data_nascimento"><strong>Ano de Nascimento: 
                                
                            </strong></label>
                            <input type="date" name="data_nascimento" id="data_nascimento"  required>
                  
                        <br><br>

                        <div class="inputbox" >
                            <input type="tel" name="estado" id="estado" class="input-user" required>
                            <label for="estado" class = "move-label">Estado</label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="text" name="cidade" id="cidade" class="input-user" required>
                            <label for="cidade" class = "move-label" >Cidade</label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="password" name="senha" id="senha" class="input-user" required>
                            <label for="senha" class = "move-label">Digite Sua Senha</label>
                        </div>
                        <br><br>

                        <input type="submit"  name="submit" id="submit">

                </fieldset>
            </form>
        </div>
    </body>
</html>