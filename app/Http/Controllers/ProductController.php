<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listar todos os produtos
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    // Exibir formulário para criar um novo produto
    public function create()
    {
        return view('create');
    }

    // Salvar um novo produto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect('/')->with('success', 'Produto criado com sucesso!');
    }

    // Exibir formulário para editar um produto
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    // Atualizar um produto
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'available' => 'boolean',
        ]);

        $product->update($request->all());

        return redirect('/')->with('success', 'Produto atualizado com sucesso!');
    }

    // Deletar um produto
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/')->with('success', 'Produto excluído com sucesso!');
    }

    // Buscar por um nome de produto
    public function search(Request $request){
        $searchTerm = $request->input('q');
        $products = Product::where('name','like','%' . $searchTerm . '%')->get();

        return view('index', compact('products'));
    }
}