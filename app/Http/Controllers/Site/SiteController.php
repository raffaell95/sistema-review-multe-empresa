<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class SiteController extends Controller
{
  

    
    public function index(Produto $produto){

        $produtos = $produto->all();

        return view('site.index', compact('produtos'));
    }

}
