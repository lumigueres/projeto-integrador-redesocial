
<?php include 'header.php' ?>

<link rel="stylesheet" href="../css/profile.css">

<div class="profile container-fluid">


  <div class="profile__row row">

    <div class="profile-picture col-lg-3 col-md-3 col-sm-8 col-sm-offset-2 col-md-offset-0 col-xs-8 col-xs-offset-2">

      <img src="../images/profile_pic.png" alt="foto" class="profile-picture__image">
      <button class="btn btn-default profile-picture__button" type="button" name="button">insira a sua foto
      </button>

    </div>

    <div class="profile-input col-lg-9 col-md-9 col-sm-12 col-xs-12">

      <input type="name" class="form-control profile-input__field" placeholder="nome">
      <input type="last-name" class="form-control profile-input__field" placeholder="sobrenome">
      <input type="area" class="form-control profile-input__field" placeholder="área de atuação">
      <input type="email" class="form-control profile-input__field" placeholder="e-mail">
      <input type="position" class="form-control profile-input__field" placeholder="cargo/papel">
      <input type="telephone" class="form-control profile-input__field" placeholder="telefone">
      <input type="number" class="form-control profile-input__field" placeholder="ramal">
      <input type="create-password" class="form-control profile-input__field" placeholder="crie a sua senha">
      <input type="confirm-password" class="form-control profile-input__field" placeholder="confirme a sua senha">

    </div>

  </div>

  <div class="profile__row row">

    <div class="profile-description col-lg-6 col-md-6 col-xs-12">
      <p class="profile-description__title">sobre mim</p>
      <textarea class="form-control profile-description__text" rows="3" placeholder="escreva a sua mini bio"></textarea>
    </div>

    <div class="profile-tag-area col-lg-6 col-md-6 col-xs-12">
      <p class="profile-description__title">fale comigo sobre</p>
      <input type="search" class="form-control profile-description__search-tag" placeholder="buscar">
      <button type="button" class="btn btn-default profile-tag-area__button--add">adicionar</button>
      <button type="button" class="btn btn-default profile-tag-area__button--remove">remover</button>
    </div>

    <div class="profile__button">

    </div>
  </div>

</div>

<?php include 'footer.php' ?>
