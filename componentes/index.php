<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sociable - login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

<?php include 'header.php' ?>

    <div class="container">

      <img class="welcome side" src="../images/login_image.jpg">

      <div class="login-area col-md-4 col-xs-12 side">

              <form id="cadastro" method="post" action="">
                <h2>login</h2>

                <div>
                  <label for="nome_cad">Seu nome</label>
                  <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome">
                </div>

                <div>
                  <label for="email_cad">Seu e-mail</label>
                  <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com">
                </div>

                <div>
                  <label for="senha_cad">Sua senha</label>
                  <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234">
                </div>

                <div>
                  <input type="submit" value="Cadastrar">
                </div>

                <div class="link">
                  Já tem conta?
                  <a href="#paralogin"> Ir para Login </a>
                </div>
              </form>
            </div>

    </div>

<?php include 'footer.php' ?>

  </body>
</html>
