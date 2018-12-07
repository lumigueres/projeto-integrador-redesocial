@extends('layouts.app')

@section('css-custom', '/css/profile.css')

@section('content')

<link rel="stylesheet" href="/css/profile.css">

<div class="profile container-fluid">
  
  <div class="profile__row row">
    <form method="POST" action="" enctype="multipart/form-data">
      @csrf
    <div class="col-lg-3 col-md-3 col-sm-8 col-sm-offset-2 col-md-offset-0 col-xs-8 col-xs-offset-2">
      <figure class="profile-picture">
        <div class="profile-picture__holder"></div>
          <img src="{{ $user->image == NULL ? '' : '/storage/'.$user->image }}" alt="foto" class="profile-picture__image">
          <label for="input_photo" class="btn btn-default profile-picture__button">
            @if($user->image == NULL)
              insira a sua foto
              @else
              troque a sua foto
            @endif
          </label>
            <input type="file" name="image" accept="image/*" id="input_photo">
      </figure>
    </div>

    <div class="profile-input col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <input type="text" class="form-control profile-input__field" name="name" id="name" placeholder="nome" required @unless($isOwner) readonly @endunless value="{{ $user->name }}">
        <input type="text" class="form-control profile-input__field" name="last_name" id="last-name" placeholder="sobrenome" required @unless($isOwner) readonly @endunless value="{{ $user->last_name }}">
        <input type="text" class="form-control profile-input__field" name="area" id="area" placeholder="área de atuação" required @unless($isOwner) readonly @endunless value="{{ $user->area }}">
        <input type="email" class="form-control profile-input__field" name="email" id="email-corp" placeholder="e-mail" required @unless($isOwner) readonly @endunless value="{{ $user->email }}">
        <input type="text" class="form-control profile-input__field" name="position" id="position" placeholder="cargo/papel" required @unless($isOwner) readonly @endunless value="{{ $user->position }}">
        <input type="text" pattern="[0-9]{10,11}" class="form-control profile-input__field" name="phone" id="telephone" required placeholder="telefone" @unless($isOwner) readonly @endunless value="{{ $user->phone }}">
        <input type="text" pattern="[0-9]{4}" class="form-control profile-input__field" name="number" id="number" placeholder="ramal" @unless($isOwner) readonly @endunless value="{{ $user->number }}">
    </div>

  </div>

  <div class="profile__row row">

    <div class="profile-description col-lg-6 col-md-6 col-xs-12">
      <p class="profile-description__title">sobre mim</p>
      <textarea class="form-control profile-description__text" name="mini_bio" rows="3" placeholder="escreva a sua mini bio" maxlength="400" @unless($isOwner) readonly @endunless>{{ $user->mini_bio }}</textarea>
    </div>

    <div class="profile-tag-area col-lg-6 col-md-6 col-xs-12">
      <p class="profile-description__title">fale comigo sobre</p>
      <input type="search" class="form-control profile-description__search-tag" placeholder="buscar">
      <button type="button" class="btn btn-default profile-tag-area__button--add">adicionar</button>
      <button type="button" class="btn btn-default profile-tag-area__button--remove">remover</button>
    </div>

  </div>

    <div class="profile__buttons row col-lg-2 col-md-2 col-xs-4 col-lg-offset-5 col-md-offset-4 col-md-offset-2">
      <button type="button" class="btn btn-default profile__buttons--edit">editar</button>
      <button type="submit" class="btn btn-default profile__buttons--save">salvar</button>
      <a href="/profile/delete">Deletar</a>
    </div>
  </form>
</div>

@stop
