@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <div class="row mt-5">
        <div class="col-sm-8 mt-5">
            <img src="{{asset('storage/imagens/login.png')}}" alt="">
        </div>
        <div class="col-sm-4 mt-5">
            <div class="">
                <form class="form-signin">
                  <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">LOGIN</h1>
                  <label for="inputEmail" class="sr-only" style="font-size: 1rem">E-mail</label>
                  <input type="email" id="inputEmail" class="form-control" required autofocus>
                  <label for="inputPassword" class="sr-only mt-3" style="font-size: 1rem">Senha</label>
                  <input type="password" id="inputPassword" class="form-control"  required>
                  </div>
                  <a href="/">
                      <button class="btn btn-lg btn-block mt-4" style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white" type="submit">Entrar</button>
                  </a>
                  <a class="color-primary mt-4" href="/cadastroCivil" style="text-decoration: none">Não tem cadastro? Crie sua conta</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection