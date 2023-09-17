@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-sm-4">
            <div class="p-3 m-0 border-0 bd-example mt-3 border-0">  
                <div class="card text-bg rounded-4 p-3" style="width: 100%; background-color: #B9E66F">
                    <svg class="rounded-4" width="100%" height="635" style="background-color: #DDF5B6;">
                    </svg>
                    <div class="card-img-overlay text-dark p-4">
                        <h5 class="card-title mb-4" style="font-weight: bold; font-size: 1.5rem">Proximos Agendamentos</h5>
                        <p class="card-text">This is a wider card with supporting text below.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col sm-8">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 1rem">
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                            <img src="{{asset('storage/imagens/papel.png')}}" alt="">
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">PAPEL</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                            <img src="{{asset('storage/imagens/plastico.png')}}" alt="">
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">PLÁSTICO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                            <img src="{{asset('storage/imagens/vidro.png')}}" alt="">
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">VIDRO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                            <img src="{{asset('storage/imagens/metal.png')}}" alt="">
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">METAL</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                            <img src="{{asset('storage/imagens/oleo.png')}}" alt="">
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">ÓLEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="display: flex; justify-content: center; align-items: center; background-color: #B9E66F; width: 100%; height: 255px;">
                            <img src="{{asset('storage/imagens/organico.png')}}" alt="">
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">ORGÂNICO</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>