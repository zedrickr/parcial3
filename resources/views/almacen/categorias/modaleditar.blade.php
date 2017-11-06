<div id="myModal-editar-{{$tprod->idtipo_producto}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
<form method="POST" 
action="{{route('categorias.update',$tprod->idtipo_producto)}}">
    {!!method_field('PUT')!!}
    {!!csrf_field()!!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Editar Categoría: {{ $tprod->nombre}}</h3>
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
      
   

      <div class="modal-body">
       
              <label class="">Nombre</label>
              <input type="text" name="nombre" required value="{{$tprod->nombre}}" class="form-control" >
              
            
   
              <label class="">Descripción</label>
              <input type="text" name="descripcion" required value="{{$tprod->descripcion}}" class="form-control" >
              
            </div>
     
     
      
      <div class="modal-footer">
         
 <input class="btn btn-success" type="submit" value="Guardar">
 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
       </div>

    </div>

</form>
  </div>
</div>