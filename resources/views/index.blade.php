<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('search')}}" method="GET" class="mb-3" >
                    <div class="input-group">
                        <input type="text" name="q" class="form-control " placeholder="Buscar por nome de produto:">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <h1>Lista de Produtos</h1>
                <a href="{{ url('/create') }}" class="btn btn-primary mb-3">Criar Produto</a>
                @if($products->isEmpty())
                    <p>Não há produtos cadastrados.</p>
                @else

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Disponível</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->available ? 'Disponível' : 'Indisponível' }}</td>
                                    <td>
                                        <a href="{{ route('edit', $product->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('destroy', $product->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
