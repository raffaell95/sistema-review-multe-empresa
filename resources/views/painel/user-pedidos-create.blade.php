@extends('site.base')



@section('content')
<br><br>
<div class="container">

    <h3>Novo pedido</h3>
    <hr>

<form method="post" action="{{route('pedido.store')}}">
    @csrf

    <input type="hidden" name="id_produtos" value="{{$produtos->id}}">
    <input type="hidden" name="id_usuario" value="{{$user->id}}">

    <div class="form-group"> 
    <input type="text" class="form-control" id="nome-produto" name="nome_produto" value="{{$produtos->nome_produto}}" disabled placeholder="Nome do produto">
    </div>

    <div class="form-group"> 
        <input type="number" class="form-control" id="numero-produto" name="quantidade" required placeholder="Quantidade">
  </div>

    <div class="form-group">
    <select class="form-control form-control" name="forma_pagamento">

        <option value="Outros">Forma de Pagamento</option>
        @foreach ($forma_pagamento as $pag)
            <option value="{{$pag}}">{{$pag}}</option>
        @endforeach
    
    </select>
</div>

        
        <div class="form-group">
                <label for="descricao-produto">Descrição do produto</label>
        <textarea class="form-control description-class" id="descricao-produto" rows="3" disabled name="descricao">{{$produtos->descricao}}</textarea>
              </div>

        <div class="modal-footer">
            <a href="{{route('home')}}" class="btn btn-primary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
    @endsection
