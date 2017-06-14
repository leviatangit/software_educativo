<div id="ModalCrearEstudiante" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> <span class="fa fa-fw fa-plus"></span>  Registrar un estudiante a la secciòn {{ $seccion->nombre }} </h4>
      </div>
      <div class="modal-body">

        <form action="{{ route('users.store_estudiante') }}" method="post">
        {{ method_field('POST') }}
        {{ csrf_field() }}
        <input type="hidden" name="id_seccion" value="{{ $seccion->id }}">

<!-- -->

        @if( count( $errors ) > 0 )
          @foreach( $errors as $error )
            <h2> {{ $error }} </h2>
          @endforeach
        @endif


          <div class="row user-create-row">
          <div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                <label class="col-md-12">Nombre</label>
                <div class="col-md-12">
                <input type="text" name="nombre" required="required" value="{{ old('nombre') }}" class="form-control">
                @if( $errors->has('nombre') )
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                </div>
              </div>
          </div>

          <div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('apellido') ? ' has-error' : '' }}">
                <label class="col-md-12">Apellido</label>
                <div class="col-md-12">
                <input type="text" name="apellido" required="required"  value="{{ old('apellido') }}" class="form-control">
                @if( $errors->has('apellido') )
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                @endif                
                </div>
              </div>
          </div>
          </div>

          <div class="row user-create-row">
          <div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('cedula') ? ' has-error' : '' }}">
            <label class="col-md-12">Cedula</label>
            <div class="col-md-12">
            <input type="number" name="cedula" required="required"  value="{{ old('cedula') }}"  class="form-control"> </div>
            @if( $errors->has('cedula') )
                <span class="help-block">
                    <strong>{{ $errors->first('cedula') }}</strong>
                </span>
            @endif            
            </div>
          </div>

          <div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                <input type="email"  required="required" value="{{ old('email') }}" class="form-control" name="email" id="example-email"> 
                @if( $errors->has('email') )
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                    </div>
            </div>
          </div>
          </div>

          <div class="row user-create-row">
          <div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                <input name="password" required="required" type="password" value="" class="form-control"> 
                @if( $errors->has('password') )
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </div>
            </div>
          </div>

          <div class="col-md-6 col-xs-6">
            <div class="form-group">
                <label class="col-md-12">Repetir Password</label>
                <div class="col-md-12">
                <input name="password_confirmation" required="required" type="password" value="" class="form-control"> </div>
            </div>
          </div>
          </div>
<!-- -->
        
        
      </div>

      <div class="modal-footer"> 
        <button class="btn btn-info" type="submit"> <span class="fa fa-save fa-fw"></span> Enviar </button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
      </div>
    </div>
  </div>
</div>

