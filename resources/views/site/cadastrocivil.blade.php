@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <h1 style="display: flex; justify-content: center; font-weight: bolder">CADASTRO CÍVIL</h1>
    <div class="row mt-4">
        <button class="btn btn-lg btn-block mb-4 me-2" style="width: 25%; background-color: #7BC92D; font-weight: bold;" type="submit">Cívil</button>   
        <button class="btn btn-lg btn-block mb-4 ms-2" style="width: 25%; background-color: #A2DF7D; font-weight: bold;" type="submit">
            <a href="/cadastroCatador" style="color: black; text-decoration: none">Catador</a>
        </button>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="col me-4 ">
                <div class="">
                    <form class="form-signin">
                      <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">Seus Dados</h1>
                      <div class="row">
                        <div class="col">
                            <label for="inputNome" class="sr-only mt-3" style="font-size: 1rem">Nome Completo</label>
                            <input type="text" id="inputNome" class="form-control"  required>
                        </div>
                        <div class="col">
                            <label for="inputCPF" class="sr-only mt-3" style="font-size: 1rem">CPF</label>
                            <input type="text" id="inputCPF" class="form-control"  required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="inputTelefone" class="sr-only mt-3" style="font-size: 1rem">Telefone</label>
                            <input type="number" id="inputTelefone" class="form-control"  required>
                        </div>
                        <div class="col">
                            <label for="inputEmail" class="sr-only mt-3" style="font-size: 1rem">E-mail</label>
                            <input type="email" id="inputEmail" class="form-control"  required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="inputSenha" class="sr-only mt-3" style="font-size: 1rem">Senha</label>
                            <input type="password" id="inputSenha" class="form-control"  required>
                        </div>
                        <div class="col">
                            <label for="inputConfirmar" class="sr-only mt-3" style="font-size: 1rem">Confirmar senha</label>
                            <input type="password" id="inputConfirmar" class="form-control"  required>
                        </div>
                      </div>                         
                    </form>
                </div>
            </div>
        </div>

        
        <div class="col-sm-4 ">
            <form class="form-signin">
                <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">Seu endereço</h1>
                <div class="row">
                <div class="col">
                    <label for="inputCidade" class="sr-only mt-3" style="font-size: 1rem">Cidade</label>
                    <input type="text" id="inputCidade" class="form-control"  required>
                </div>
                <div class="col-sm-4">
                    <label for="inputUF" class="sr-only mt-3" style="font-size: 1rem">UF</label>
                    <input type="text" id="inputUF" class="form-control"  required>
                
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label for="inputRua" class="sr-only mt-3" style="font-size: 1rem">Rua</label>
                    <input type="text" id="inputRua" class="form-control"  required>
                </div>
                <div class="col-sm-4">
                    <label for="inputNúmero" class="sr-only mt-3" style="font-size: 1rem">Número</label>
                    <input type="number" id="inputNúmero" class="form-control"  required>
                </div>
                </div>
                
                <label for="inputBairro" class="sr-only mt-3" style="font-size: 1rem">Bairro</label>
                <input type="text" id="inputBairro" class="form-control"  required>
            </form>
        </div>
    </div>
    <div style="display: flex; justify-content: center">
        <div class="row text-center mt-3">
            <a href="/">
                <button class="btn btn-lg btn-block mt-4" style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white" type="submit">Cadastrar</button>
            </a>
            <a class="color-primary mt-1" href="/login" style="text-decoration: none">Já tem cadastro? Entre na sua conta</a>        
        </div>
    </div>
</div>
@endsection