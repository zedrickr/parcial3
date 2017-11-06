<div id="myModal-{{$tprod->idtipo_producto}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">¿Desea eliminar la categoría?</h4>
      </div>
      <div class="modal-footer">
        <form method="POST" action="{{route('categorias.destroy', $tprod->idtipo_producto)}}">
              {!!method_field('DELETE')!!}
              {!!csrf_field()!!}
             
                <button class="btn btn-danger" type="submit">Eliminar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </form>
      
      
        
      </div>

    </div>


  </div>
</div>