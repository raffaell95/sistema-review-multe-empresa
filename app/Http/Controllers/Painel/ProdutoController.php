<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;


class ProdutoController extends Controller
{
   

    private $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    public function index()
    {
            //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $categorias = ['Eletronicos', 'Moveis', 'Limpeza', 'Banho', 'Outros'];

       return view('painel.cadastro-produto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dataForm = $request->except('_token');

        $cadastrar = $this->produto->create($dataForm);

        if($cadastrar){
            return redirect('/admin');
        }else{
            return redirect()->route('create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->produto->find($id);

        return view('painel.show-produto', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $categorias = ['Eletronicos', 'Moveis', 'Limpeza', 'Banho', 'Outros'];

       $produto = $this->produto->find($id);    

       return view('painel.editar-produto', compact('categorias', 'produto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataForm = $request->all();

        $produto = $this->produto->find($id);

        $update = $produto->update($dataForm);

        if($update){
            return redirect('/admin');
        }
        else{
            return redirect()->route('produto.edit', $id)->with(['errors' => 'Falha ao editar']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        
        $delete = $produto->delete();

        if($delete){
            return redirect('/admin');
        }else {
            return redirect()->route('produto.show', $id)->with(['errors' => 'Falha ao deletar']);
        }
    }
}
