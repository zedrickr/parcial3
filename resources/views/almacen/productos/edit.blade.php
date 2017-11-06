@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Producto: {{ $producto->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
	
	<form method="POST" action="{{route('productos.update',$producto->idproducto)}}">
		{!!method_field('PUT')!!}
		{!!csrf_field()!!}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group label-floating is-empty">
            	<label class="">Nombre</label>
            	<input type="text" name="nombre" required value="{{$producto->nombre}}" class="form-control" >
            	
            </div>
    	</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group label-floating is-empty">
            	<label class="">Descripcion</label>
            	<input type="text" name="descripcion" required value="{{$producto->descripcion}}" class="form-control" >
            	
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group label-floating is-empty">
            	<label class="">Stock</label>
            	<input type="text" name="descripcion" required value="{{$producto->stock}}" class="form-control" >
            	
            </div>
    	</div>
		
		
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group ">
		<label>Categoria</label>
            	<select name="idtipo_producto" class="form-control">
    				@foreach ($tproductos as $tprod)
    					@if ($tprod->idtipo_producto==$producto->idtipo_producto)
                       <option value="{{$tprod->idtipo_producto}}" selected>{{$tprod->nombre}}</option>
                       @else
                       <option value="{{$tprod->idtipo_producto}}">{{$tprod->nombre}}</option>
                       @endif
    				@endforeach
    			</select>
		
		
            </div>

		</div>
		
		<input class="btn btn-success" type="submit" value="Guardar">
		<a class="btn btn-primary" href="{{url('almacen/productos')}}">Regresar</a>
	</form>
		@endsection