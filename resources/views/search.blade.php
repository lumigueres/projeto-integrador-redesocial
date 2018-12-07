@extends('layouts.app')

@section('css-custom', '/css/search.css')

@section('content')


<div class="result container-fluid">

  @foreach ($result as $user)
    <div class="search__result">


    <p>Nome: {{ $user->name }} {{ $user->last_name }}</p>
    <p>E-mail: {{ $user->email }}</p>
    <a href="/profile/{{ urlencode($user->email) }}">ver perfil</a>

    </div>
  @endforeach

</div>



@stop
