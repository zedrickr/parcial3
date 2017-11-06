<div id="myModal-ver-{{$tprod->idtipo_producto}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Categoria: {{ $tprod->nombre}}</h3>
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
       <label class="label-floating">Nombre:</label>   
                 <p>{{$tprod->nombre}} </p> 
                 <label class="label-floating">Descripción</label>
              <p>{{$tprod->descripcion}}</p>
              
            </div>
     
     
      
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       </div>

    </div>


  </div>
</div>