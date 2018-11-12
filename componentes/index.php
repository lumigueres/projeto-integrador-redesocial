<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sociable - login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>


<?php include 'header.php' ?>

<div class="container-fluid">

<div class="row team-image">

<figure class="welcome-image col-xs-12 col-md-8 col-lg-8">
    <img class="welcome side" src="../images/login_image.jpg">
    <figcaption class="label label-primary welcome-message">uma rede social sob medida para a sua equipe</figcaption>
    <button class="faq-button">descubra como funciona</button>
</figure>

      <form class="form-horizontal login-area side login-box">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">e-mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="seu e-mail">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="sua senha">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox">Lembre de mim
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default faq-button entry-button">entrar</button>
    </div>
  </div>
</form>

</div>



</div>

<?php include 'footer.php' ?>


  </body>
</html>
