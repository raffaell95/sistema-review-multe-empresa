@extends('site.base')


@section('content')

<section class="dashboard section">

    <div class="container">

        <h1>Detalhes do produto</h1>
        <hr>
      
        <p><strong>ID</strong> {{$produto->id}}</p>
                                
        <p><strong>Nome:</strong> {{$produto->nome_produto}}</p>
                                							                                                              
		<p><strong>Numero:</strong> {{$produto->numero}}</p>
                                                              
        <p><strong>Categoria:</strong> {{$produto->categoria}}</p>
                                                                         
        <p><strong>Descrição:</strong> {{$produto->descricao}}</p>	
        
        <hr>

        <form method="post" action="{{ route('produto.destroy', $produto->id) }}">
            {!! method_field('DELETE') !!}
            @csrf
            
        <a href="{{url('/admin')}}" class="btn btn-primary">Cancelar</a>
        <button type="submit" class="btn btn-danger">Deletar produto</button>
        
        </form>


    </div>
</section>

@endsection