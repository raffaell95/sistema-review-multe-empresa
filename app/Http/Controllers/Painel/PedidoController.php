<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;
use App\Models\Painel\Pedido;
use Auth;
use DB;

class PedidoController extends Controller
{

    private $produto;
    private $pedido;

    public function __construct(Produto $produto, Pedido $pedido){
        $this->middleware('auth');
        $this->produto = $produto;
        $this->pedido = $pedido;
    }

    public function index(){
        
        $pedidos = DB::table("pedidos")
        ->join('produtos', 'produtos.id', 'pedidos.id_produtos')
        ->join('users', 'users.id', 'pedidos.id_usuario')
        ->get(['pedidos.id', 'first_name', 'last_name', 'nome_produto', 'quantidade', 'forma_pagamento']);
        
     
        return view('painel.pedidos-admin', compact('pedidos'));
    }


    public function cliente_pedidos(){
        $id_user = Auth::user()->id;
        $pedidos = DB::table("pedidos")->where('id_usuario', $id_user)
        ->join('produtos', 'produtos.id', 'pedidos.id_produtos')
        ->join('users', 'users.id', 'pedidos.id_usuario')
        ->get(['pedidos.id', 'first_name', 'last_name', 'nome_produto', 'quantidade', 'forma_pagamento']);
        
     
        return view('painel.pedidos-admin', compact('pedidos'));
    }

    public function create($id_produto){

        $user = Auth::user();
        $produtos = $this->produto->find($id_produto);
        $forma_pagamento = ['Boleto', 'Debito', 'Credito', 'Carnê'];

        return view('painel.user-pedidos-create', compact(['produtos', 'user', 'forma_pagamento']));
    }


    public function store(Request $request){

        $dataForm = $request->except('_token');
        $id_user = Auth::user()->id;
        $cadastrar = $this->pedido->create($dataForm);
        if($cadastrar){
            return redirect()->route('pedido.cliente.lista', $id_user);
        }else{
            return redirect()->route('pedido.create', $this->produto->find($id));
        }

    }
}
