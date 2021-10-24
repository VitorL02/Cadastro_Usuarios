<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Bem Vindo- Faça seu Login</title>
</head>
    <body> 
        <a href="index.php">Voltar</a>
        <div id="login">
            <h1>Login</h1>

            <form action="testeLogin.php" method = "POST">
                
                <input type="email"  name = 'email' placeholder="E-mail" class="input-login" required>
                <br><br>
                <input type="password" name='senha' placeholder="Senha" class="input-login" required >
                <br><br>
                <input type="submit" name="submit" id="submit" value="Login" class="login-button" >

            </form>
        </div>

    </body>
</html>