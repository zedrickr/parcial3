@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos <a href="productos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Producto</th>
						<th>Descripcion</th>
						<th>Stock</th>
						<th>Categoria</th>
						
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productos as $tprod)
					<tr>
						<td>{{$tprod->idproducto}}</td>
						<td>{{$tprod->nombre}}</td>
						<td>{{$tprod->descripcion}}</td>
						<td>{{$tprod->stock}}</td>
						<td>{{$tprod->idtipo_producto}}</td>
						
						<td>
							
							<a href="" data-target="#modal-delete" data-toggle="modal"><button class="btn btn-danger">Eliminar Modal</button></a>
							<a class="btn btn-info btn-xs" href="{{route('productos.show',$tprod->idproducto)}}">Ver</a>
							<a class="btn btn-warning btn-xs" href="{{route('productos.edit',$tprod->idproducto)}}">Editar</a>
						
							<form style="display: inline" method="POST" action="{{route('productos.destroy', $tprod->idproducto)}}">
							{!!method_field('DELETE')!!}
							{!!csrf_field()!!}
								<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
							</form>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
	</div>
</div>
@include('almacen.categorias.modaleliminar')

@endsection