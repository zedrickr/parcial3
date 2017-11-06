@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categorías <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal-crear">Nuevo</button></h3>
		
	</div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Categoría</th>
			<th>Descripción</th>
			
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($tproductos as $tprod)
		<tr>
			<td>{{$tprod->idtipo_producto}}</td>
			<td>{{$tprod->nombre}}</td>
			<td>{{$tprod->descripcion}}</td>
			
			<td>
				<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal-ver-{{$tprod->idtipo_producto}}">Ver</button>
				<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal-editar-{{$tprod->idtipo_producto}}">Editar</button>
				<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal-{{$tprod->idtipo_producto}}">Eliminar</button>
				

			</td>
			
		</tr>
		@include('almacen.categorias.modaleliminar')
		@include('almacen.categorias.modalcrear')
		@include('almacen.categorias.modaleditar')
		@include('almacen.categorias.modalver')
		@endforeach
	</tbody>
</table>



@endsection