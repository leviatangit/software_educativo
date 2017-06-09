<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registrar Año Nuevo </h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('years.create') }}" method="post">
        {{ method_field('POST') }}
        {{ csrf_field() }}
        <div class="form-group">   
          <label> Año </label>       
          <input type="number" required="required" class="form-control" name="desde">            
        </div>   

        <div class="form-group">   
          <label> Activo </label>       
          <div class="separar-checkbox">
            <input type="radio" checked name="activo" value="1"> Si            
            <input type="radio" name="activo" value="0"> No             
          </div>
        </div>   
      </div>
      <div class="modal-footer">
        <button class="btn btn-info" type="submit"> <span class="fa fa-date fa-fw"></span> Guardar </button>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

