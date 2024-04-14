<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Editar Produto</h1>
                <form action="{{ route('update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Preço:</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
                    </div>
                    

                        <div class="form-group">
                            <label for="available">Disponível:</label>
                            <div class="custom-control custom-switch">
                                <input type="hidden" name="available" value="0">
                                <input type="checkbox" class="custom-control-input" id="available_switch" name="available" value="1" {{ $product->available ? 'checked' : '' }}>
                                <label class="custom-control-label" for="available_switch">Disponível</label>
                            </div>
                        </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
