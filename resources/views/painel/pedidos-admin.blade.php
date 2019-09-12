@extends('site.base')


@section('content')

<section class="dashboard section">

	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
		
			<div class="col-md-12 offset-md-1 col-lg-12 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">Lista de pedidos</h3>

					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Informações do pedido</th>
								<th class="text-center">Quantidade</th>
								<th class="text-center">Forma de pagamento</th>
								<th class="text-center">Opções</th>
							</tr>
						</thead>
						<tbody>

							@foreach ($pedidos as $pedido)	
						
							<tr>
								
			
								<td class="product-details">
									<h3 class="title">Comprador: {{$pedido->first_name}} {{$pedido->last_name}}</h3>
									<span class="add-id"><strong>Id do pedido:</strong> {{str_pad($pedido->id, 4, 0, STR_PAD_LEFT)}}</span>
									<span><strong>Produto</strong>{{$pedido->nome_produto}}</span>
								</td>
							<td class="product-category"><span class="categories">{{ $pedido->quantidade }}</span></td>
							<td class="product-category"><span class="categories">{{$pedido->forma_pagamento}}</span></td>

								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
				
											<li class="list-inline-item">
											<a class="edit" href="#">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="#">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->



</section>
    
@endsection