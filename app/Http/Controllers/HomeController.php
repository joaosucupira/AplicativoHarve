<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Exibir menu de rotas
    public function menu(){
        return view('menu');
    }
}
