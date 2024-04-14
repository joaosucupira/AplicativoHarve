<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Criar Produto</h1>
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price">Preço:</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
