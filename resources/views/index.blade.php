@extends('layouts.app')

@section('css-custom', '/css/login.css')

@section('content')

  <div class="container-fluid">
    <div class="row flex-md">

      <div class="welcome col-md-8">

<<<<<<< Updated upstream:resources/views/index.blade.php
        <img class="welcome__image" src="/images/login_image.jpg">
=======
        <img class="welcome__image" src="../images/login_image.jpg" href= >
>>>>>>> Stashed changes:componentes/index.php

        <div class="welcome__wrapper">
          <p class="welcome__slogan">uma rede social sob medida para a sua equipe</p>
          <button class="btn btn-default welcome__button" type="button" name="button">descubra como funciona</button>
        </div>

      </div>

      <div class="login col-md-4">

        <div class="login__title">
          <p>login</p>
        </div>

        <form class="form-horizontal side">

          <label for="email" class="control-label">e-mail</label>
          <input type="email" class="form-control" id="email" placeholder="seu e-mail">


          <label for="password" class="control-label">senha</label>
          <input type="password" class="form-control" id="password" placeholder="sua senha">

          <div class="checkbox">
            <label>
              <input type="checkbox">Lembre de mim
            </label>
          </div>

          <button type="submit" class="btn btn-default login__button">entrar</button>
          <button type="button" class="btn btn-default login__button--register">cadastrar</button>

        </form>
      </div>

    </div>

  </div>

</div>

@stop
