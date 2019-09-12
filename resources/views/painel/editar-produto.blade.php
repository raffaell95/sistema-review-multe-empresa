@extends('site.base')



@section('content')
<br><br>
<div class="container">


<form method="post" action="{{ route('produto.update', $produto->id) }}">
{!! method_field('PUT') !!}

    @csrf

    <div class="form-group"> 
    <input type="text" class="form-control" id="nome-produto" name="nome_produto" value="{{$produto->nome_produto}}" placeholder="Nome do produto">
    </div>

    <div class="form-group">
    <select class="form-control form-control" name="categoria">

        <option>Categoria do produto</option>
        @foreach ($categorias as $categoria)

            <option value="{{$categoria}}"
            @if (isset($produto) && $produto->categoria == $categoria) selected @endif >{{$categoria}}</option>
 
        @endforeach
    </select>
</div>

    <div class="form-group"> 
            <input type="number" class="form-control" id="numero-produto" value="{{$produto->numero}}" name="numero" placeholder="Numero do produto">
      </div>
        
      <div class="form-group">
            <label for="imagem-produto">Adicionar imagem do produto</label>
            <input type="file" class="form-control-file" id="imagem-produto"  value="{{$produto->imagem_produto}}" name="imagem_produto">
        </div>

        
        <div class="form-group">
                <label for="descricao-produto">Descrição do produto</label>
                <textarea class="form-control" id="descricao-produto" rows="3" name="descricao">{{$produto->descricao}}</textarea>
              </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
    @endsection
