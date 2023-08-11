<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Login e senha</h1>

    <form action='login.php' method="POST">


    <div class="input-group">
    <label class="user-label">Email</label>
    <br>

  <input required="" for="usr" type="text" name="email" autocomplete="off" class="input">
    </div>
    <br>
    <div class="input-group">
  <label class="user-label">Senha</label>
  <br>

  <input required="" for="pass" type="text" name="senha" autocomplete="off" class="input">

    </div>
    <br>
    <input type='submit' value='entrar' class='entrar'/>

    </form>

</body>
</html>