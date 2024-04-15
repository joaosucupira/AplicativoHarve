
@extends('layouts.app')

@section('content')
    <div class="column container">
        <div class="row d-flex justify-content-center m-3">
            <h1>Menu</h1>
        </div>
        <div class="row d-flex justify-content-center m-3">
                    <a href="/index"><button class="btn btn-primary m-3">Produtos</button></a>
                    
                    <button class="btn btn-primary m-3">Usuários</button>
                    <button class="btn btn-primary m-3">Pedidos</button>
        </div>
    </div>

@endsection