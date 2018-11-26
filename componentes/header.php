<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/header.css">
  <title>sociable</title>
  </head>

<body>

<header class="main-header container-fluid">

<div class="row">
  <div class="col-xs-10 col-md-8">
    <h1 class="main-header__logo">sociable</h1>
  </div>

  <div class="col-md-4">
    <?php
      if($isLogged) {
    ?>
    <input type="text" class="main-header__input form-control hidden-xs hidden-sm" placeholder="Quem você está procurando?">
    <img class="main-header__icon" src="../images/search_icon.png" href="#">

    <?php
      }
    ?>
  </div>

</div>

</header>
