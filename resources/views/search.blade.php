@extends('layouts.app')

@section('css-custom', '/css/search.css')

@section('content')


<div class="result container-fluid">
  <div class="search-result">

  @foreach ($result as $user)
    <a href="/profile/{{ urlencode($user->email) }}" class="result-item"><figure>
      <img class="result-item__image" src="{{ $user->image == NULL ? '' : '/storage/'.$user->image }}" alt="foto" class="profile-picture__image">
      <figcaption class="result-item__caption">{{ $user->name }} {{ $user->last_name }}</figcaption>
    </figure></a>

    <!-- <p>Nome: {{ $user->name }} {{ $user->last_name }}</p> -->
    <!-- <p>E-mail: {{ $user->email }}</p> -->
    <!-- <a href="/profile/{{ urlencode($user->email) }}">ver perfil</a> -->

  @endforeach
</div>

</div>



@stop
