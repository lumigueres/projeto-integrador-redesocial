@extends('layouts.app')

@section('css-custom', '/css/start.css')

@section('content')

<link rel="stylesheet" href="/css/profile.css">

<div class="profile container-fluid">


  <div class="startnow__row row">

      <h1 class="startnow__title">Como funciona o sociable?</h1><br><br>

        <div class="startnow__title--lista">
          <p>1. Faça o seu cadastro e salve o seu perfil;</p><br>
          <p>2. Convide seus colegas de trabalho para se cadastrar;</p><br>
          <p>3. Procure as pessoas da equipe por palavras-chave.</p><br>
        </div>

  </div>

  <img class="startnow__image img-responsive row" src="../images/print_profile.png" alt="amostra de página de perfil"><br><br>
  <img class="startnow__image img-responsive row" src="../images/sociable_startnow.png" alt="start now">

</div>

@stop
