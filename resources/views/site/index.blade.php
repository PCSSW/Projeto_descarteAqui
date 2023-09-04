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
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="background-color: #B9E66F; width: 100%; height: 255px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="200" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16" >
                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                        </svg>
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">PAPEL</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="background-color: #B9E66F; width: 100%; height: 255px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="200" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16" >
                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                        </svg>
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">PLÁSTICO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="background-color: #B9E66F; width: 100%; height: 255px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="200" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16" >
                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                        </svg>
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">VIDRO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="background-color: #B9E66F; width: 100%; height: 255px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="200" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16" >
                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                        </svg>
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">METAL</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="background-color: #B9E66F; width: 100%; height: 255px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="200" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16" >
                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                        </svg>
                        </div>
                        <div class="fundo" style=""></div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center align-items-center" style="font-size: x-large; font-weight: bold;">ÓLEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="bd-placeholder-img card-img-top novo-elemento" style="background-color: #B9E66F; width: 100%; height: 255px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="200" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16" >
                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                        </svg>
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