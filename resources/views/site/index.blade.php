@extends('site.base')

@section('content')


<section class="popular-deals section bg-gray home-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Produtos da loja</h2>	
				</div>
			</div>
		</div>
		<div class="row">


			<!-- offer 01 -->
		@foreach ($produtos as $produto)
			
	
		<div class="col-sm-12 col-lg-4">
				<!-- product card -->
			<div class="product-item bg-light">
				<div class="card">
					<div class="thumb-content">
						<!-- <div class="price">$200</div> -->
						<a href="">
							<img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
						</a>
					</div>
					<div class="card-body">
						<h4 class="card-title"><a href="">{{$produto->nome_produto}}</a></h4>
						<ul class="list-inline product-meta">
							<li class="list-inline-item">
								<a href=""><i class="fa fa-folder-open-o"></i>{{$produto->categoria}}</a>
							</li>
						</ul>
						<p class="card-text">{{$produto->descricao}}</p>
						<hr>
						<a href="{{route('pedido.create', $produto->id)}}" class="btn btn-primary">Gerar pedido</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
			
			
		</div>
	</div>
</section>

@endsection