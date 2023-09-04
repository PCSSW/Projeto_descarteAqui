@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    
    <div class="row" style="display: flex; justify-content: center">
        <div class="col">
            IMG
        </div>
        <div class="col" style="font-size: x-large; font-weight: bold;">
            Alice Rodrigues
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary">Editar</button>
        </div>
    </div>
    <div class="row mt-5">
        <h2 class="ms-5">Dados:</h2>
        <div class="col" style="display: flex; justify-content: center">
            <div class="alert" style="background-color: #B9E66F;height: 12rem; width: 60%">
                <h4 style="font-size: x-large; font-weight: bold;">Disponibilidade Semanal:</h4>
                <p>E-mail: alice@cefetmg.com</p>
                <p>Telefone: (35) 98888-8888</p>
                <p>Materiais de interesse: plástico, vidro, papel e óleo.</p>
            </div>
        </div>      
    </div>
</div>
@endsection