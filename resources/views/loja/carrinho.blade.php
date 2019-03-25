@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<div class="text-center">
						<div class="d-block mx-auto mb-3">
							<i class="fas fa-shopping-cart fa-3x"></i>
						</div>
						<h1><small>Carrinho de Compras</small></h1>
					</div>
				</div>

				<div class="card-body">
					<ul class="list-group list-group-flush">
						<li class="box-shadow list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">Produto</h6>
								<small class="text-muted d-none d-md-block">Descrição</small>
							</div>
							<span class="text-muted"><b>R$ XX,XX</b></span>
							<button type="button" class="btn btn-danger btn-sm" id="0" name="0" value="0">
								<i class="fas fa-times"></i>
								<small>Remover</small>
							</button>
						</li>
					</ul>
				</div>
				<div class="card-footer justify-content-between">
					<span>Total (R$)
						<b>XX,XX</b>
					</span>
					<button type="button" class="btn float-right btn-success">
						<i class="fas fa-check"></i> 
						<b>Finalizar Pedido</b>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection