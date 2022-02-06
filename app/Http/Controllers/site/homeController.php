<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Produto;

class homeController extends Controller
{
    public function index(){
        $produtos = Produto::orderBy('id', 'DESC')->take(6)->get();
        return view('site.home.index', ['ultimos_adicionados'=> $produtos]);
    }
}
