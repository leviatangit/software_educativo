<div id="ModalAgregarItem" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> <span class="fa fa-fw fa-plus"></span>  Crear un nuevo item para el modulo {{ $evaluacion->modulo->id }}  </h4>
      </div>
      <div class="modal-body">
      <form method="post" action="{{ route('evaluacion.enviar_item',[$evaluacion->id]) }}">      

        {{ method_field('POST') }}
        {{ csrf_field() }}


        <div class="form-group">   
          <label> Titulo </label>  
          <input type="text" name="titulo" required="required" class="form-control">   
        </div> 

        <div class="form-group">   
          <label> Tipo </label>
          <select name="id_profesor" class="form-control">
            <option value="seleccion_simple"> Selecciòn simple </option> 
            <option value="verdadero_falso"> Verdadero o Falso </option> 
            <option value="desarrollo"> Desarrollo </option> 
          </select>          
        </div> 

      </div>
      <div class="modal-footer">
        <button class="btn btn-info" type="submit"> <span class="fa fa-save fa-fw"></span> Enviar </button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
      </div>
    </div>
  </div>
</div>

