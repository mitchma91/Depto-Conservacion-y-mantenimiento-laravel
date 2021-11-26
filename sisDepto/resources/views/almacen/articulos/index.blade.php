@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de articulos <a href="#"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.articulos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<style>
				.estado1 {
					background-color: #ffff99 !important;
				}

				.estado2 {
					background-color: #00ffff !important;
				}
			</style>
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Cantidad</th>
					<th>Unidad</th>
					<th>Opciones</th>
				</thead>
				@foreach($articulos as $art)
				<tr>
					<td>{{ $art->idarticulos}}</td>
					<td>{{ $art->nombre_articulo}}</td>
					<td>{{ $art->tipo_articulo}}</td>

					@if($art->cantidad <= 15 ) <td class="danger">{{ $art->cantidad}}</td>
						@elseif($art->cantidad > 15 && $art->cantidad <= 30 ) <td class="warning">{{ $art->cantidad}}</td>
							@elseif($art->cantidad > 30 )
							<td class="info">{{ $art->cantidad}}</td>
							@endif

							<td>{{ $art->unidad}}</td>
							<td>

								<a href="#"><button class="btn btn-default">Detalles</button></a>
								<a href="#"><button class="btn btn-info">Editar</button></a>
							</td>
				</tr>
				@include('almacen.articulos.modal')
				@endforeach
			</table>
		</div>
		{{$articulos->render()}}
	</div>
</div>
@endsection