<div id="ModalCrear" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Crear nueva secciòn </h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('seccion.store',['profesor']) }}" method="post">
        {{ method_field('POST') }}
        {{ csrf_field() }}
        <input type="hidden" name="id_year" value="{{ $year->id }}">

        <div class="form-group">   
          <label> Nombre </label>  
          <input type="text" name="nombre" required="required" class="form-control">   
        </div> 

        <div class="form-group">   
          <label> Profesor </label>
          @if( count($profesores) > 0 )
          <select name="id_profesor" class="form-control">
            @foreach( $profesores as $profesor )
              <option value="{{ $profesor->id }}"> $profesor->fullName() </option>
            @endforeach
          </select>
          @else
          <input readonly="readonly" value="No ay profesores registrados" class="form-control text-center">   
          @endif
        </div> 
      </div>
      <div class="modal-footer">
        <button class="btn btn-info" type="submit"> <span class="fa fa-plus fa-fw"></span> Enviar  </button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
      </div>
    </div>
  </div>
</div>

