<div id="ModalAsignar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Asignar profesor </h4>
      </div>
      <div class="modal-body">
      @if( count( $profesores ) > 0 )
        <form action="{{ route('seccion.asignar_profesor') }}" method="post">
        {{ method_field('POST') }}
        {{ csrf_field() }}

        <input type="hidden" name="id_seccion" value="{{ isset( $seccion ) ? $seccion->id : ''  }}">        
        <div class="form-group">   
          <label> Profesores </label>       
          <select name="id_profesor" class="form-control">
            @foreach( $profesores as $profesor )
              <option value="{{ $profesor->id }}"> {{ $profesor->fullName() }} </option>
            @endforeach
          </select>
        </div> 
      @else
        <p class="text-center"> No ay profesores registrados   </p>
      @endif
      </div>
      <div class="modal-footer">
        <a href="{{ route('users.create' ,['profesor']) }}" class="class btn btn-default btn-md"> <span class="fa fa-plus"></span> Registrar un profesor </a>
        @if( count( $profesores ) > 0 )
        <button class="btn btn-info" type="submit"> <span class="fa fa-save fa-fw"></span> Guardar </button>
        </form>
        @endif
        <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
      </div>
    </div>
  </div>
</div>

