<!-- Modal -->
<div id="ModalComponente" class="modal fade modal_modulo" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> <img src="" class="imagen-mini"></span> <span class="modal_t"></span> </h4>
      </div>
      <div class="modal-body"></div>      
      <div class="modal-footer">
      <form method="post" style="display:inline; margin-right: 20px" action="{{ route('descargar.componente') }}">
      {{ csrf_field() }}
      {{ method_field('POST') }}
        <input type="hidden" id="componente_id" name="id_componente" value="">
        <button type="submit" class="btn btn-success"><span class="fa fa-fw fa-download"></span> Descargar</a>
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
