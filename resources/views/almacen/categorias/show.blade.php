@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Categoria: {{ $tproducto->nombre}}</h3>
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

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group label-floating is-empty">
    			<label class="label-floating">Nombre:</label>   
            	   <p>{{$tproducto->nombre}} </p>   
            	  	
            </div>
    	</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group label-floating is-empty">
            	<label class="label-floating">Descripcion</label>
            	<p>{{$tproducto->descripcion}}</p>
            	
            </div>
    	</div>
<a class="btn btn-primary" href="{{url('almacen/productos')}}">Regresar</a>
@endsection