<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="@yield('css-custom')">

  <title>sociable</title>
</head>
<body>

  <header class="main-header container-fluid">

  <div class="row">
    <div class="col-xs-10 col-md-8">
      <h1 class="main-header__logo"><a href="index.php">sociable</a></h1>
    </div>

    <div class="col-md-4">

    
      <input type="text" class="main-header__input form-control hidden-xs hidden-sm" placeholder="Quem você está procurando?">
      <img class="main-header__icon" src="../images/search_icon.png" href="#">

    </div>

  </div>

  </header>

       @yield('content')

       <link rel="stylesheet" href="/css/footer.css">

       <div class="row">
           <footer class="label label-primary col-md-12 col-xs-12 col-lg-12 main-footer">
             <ul class="nav nav-pills">
               <li role="presentation"><a href="quemsomos.php">QUEM SOMOS</a></li>
               <li role="presentation"><a href="faq.php">FAQ</a></li>
             </ul>
           </footer>
         </div>

  </body>
</html>
