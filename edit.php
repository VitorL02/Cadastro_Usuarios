<?php


if(!empty($_GET['id']))

{

    include_once ('config.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM tb_usuarios WHERE usuario_id = $id ";

    $result =$conexao ->query($sqlSelect);

    if($result -> num_rows > 0)
    {
        // Retorna uma matriz com todos os dados
        while($user_data = mysqli_fetch_assoc ($result))
        {
            $nome =  $user_data ['nome_usuario'];
            $email = $user_data ['email_usuario'];
            $telefone = $user_data ['telefone_usuario'];
            $genero = $user_data ['sexo_usuario'];
            $data_nascimento = $user_data ['data_nascimento'];
            $estado = $user_data ['estado'];
            $cidade = $user_data ['cidade'];
            $senha = $user_data ['senha_usuario'];
        }

    }
    else
    {
        header('Location:sistema.php');
    }
}

    else
    {
        header('Location:sistema.php');
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>Cadastro de Usuarios</title>
</head>
    <body>
        <a href="sistema.php">Voltar</a>
        <div id="container">
            <form action="saveEdit.php" method="POST">
                <fieldset>
                    <legend><strong>Formulario de Cadastro</strong></legend>

                        <div class="inputbox">
                            <input type="text" name="nome" id="nome" class="input-user" value = '<?php echo $nome ?>' required>
                            <label for="nome" class = "move-label" >Digite seu Nome Completo</label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="email" name="email" id="email" class="input-user" value = '<?php echo $email ?>'  required>
                            <label for="email" class = "move-label">Digite seu Email </label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="tel" name="telefone" id="telefone" class="input-user" value = '<?php echo $telefone ?>' required>
                            <label for="telefone" class = "move-label" >Digite seu Telefone</label>
                        </div>
                   

                                <p>Sexo:</p>
                                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo $genero == 'feminino' ? 'checked' : ''  ?> required>
                                <label for="feminino">Feminino</label> <br>
                                <input type="radio" name="genero" id="masculino" value="masculino"  <?php echo $genero == 'masculino' ? 'checked' : ''  ?> required>
                                <label for="masculino">Masculino</label><br>
                                <input type="radio" name="genero" id="outros" value="outros"  <?php echo $genero == 'outros' ? 'checked' : ''  ?> required>
                                <label for="outros">LGBTQIA+</label><br> <br>
                            
                            <label for="data_nascimento"><strong>Ano de Nascimento: 
                                
                            </strong></label>
                            <input type="date" name="data_nascimento" id="data_nascimento" value = '<?php echo $data_nascimento ?>' required>
                  
                        <br><br>

                        <div class="inputbox" >
                            <input type="text" name="estado" id="estado" class="input-user" value = '<?php echo $estado ?>' required>
                            <label for="estado" class = "move-label">Estado</label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="text" name="cidade" id="cidade" class="input-user" value = '<?php echo $cidade ?>' required>
                            <label for="cidade" class = "move-label" >Cidade</label>
                        </div>
                        <br><br>

                        <div class="inputbox">
                            <input type="text" name="senha" id="senha" class="input-user" value = '<?php echo $senha ?>' required>
                            <label for="senha" class = "move-label">Digite Sua Senha</label>
                        </div>
                        <br><br>
                        <input type="hidden" name = 'id' value = "<?php  echo $id?>">

                        <input type="submit"  name="update" id="update">

                </fieldset>
            </form>
        </div>
    </body>
</html>