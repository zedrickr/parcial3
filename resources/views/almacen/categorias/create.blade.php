@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Categoria</h3>
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
	
	
	
	<form method="POST" action="{{route('categorias.store')}}">
		{!!csrf_field()!!}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group label-floating is-empty">
            	<label class="">Nombre</label>
            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" >
            	
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group label-floating is-empty">
            	<label class="">Descripcion</label>
            	<input type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" >
            	
            </div>
    	</div>
		
		<input class="btn btn-success" type="submit" value="Guardar">
		<a class="btn btn-primary" href="{{url('almacen/categorias')}}">Regresar</a>
	</form>
	@endsection
	