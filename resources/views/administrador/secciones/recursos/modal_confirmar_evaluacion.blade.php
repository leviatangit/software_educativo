<div id="ModalConfirmarEvaluacion" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> <span class="fa fa-fw fa-book"></span>  Confirmar diseño de evaluaciòn </h4>
      </div>
      <div class="modal-body">

      <form method="post" action="{{ route('evaluacion.enviar',[$evaluacion->id]) }}">

        {{ csrf_field() }}
        {{ method_field('post') }}  

      </div>
      <div class="modal-footer">
        <button class="btn btn-info" type="submit"> <span class="fa fa-save fa-fw"></span> Enviar </button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
      </div>
    </div>
  </div>
</div>

