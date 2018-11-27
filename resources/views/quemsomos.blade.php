
@extends('layouts.app')

@section('css-custom', '/css/quemsomos.css')

@section('content')

<link rel="stylesheet" href="/css/quemsomos.css">

  <div class="container-fluid">
    <div class="row flex-md">

      <div class="quemsomos_wrapper container col-md-8 col-md-offset-3 col-lg-8 col-xs-10">

        <img class="quemsomos__image col-md-8" src="../images/sociable_mobile.png" alt="sociable-mobile">

        <p class="quemsomos__text col-md-4">
          Sociable é uma rede social white label que ajuda os colaboradores da sua empresa no dia a dia. Nosso objetivo é fazer com que os seus projetos sejam cada vez mais colaborativos, por isso facilitamos a comunicação entre as pessoas, por meio de uma ferramenta simples e acessível.<br><br>
        <button class="btn btn-default quemsomos__button" type="button" name="button"><a href="/profile">inscreva-se agora!</a></button>
        </p>


      </div>

      </div>

    </div>

@stop
