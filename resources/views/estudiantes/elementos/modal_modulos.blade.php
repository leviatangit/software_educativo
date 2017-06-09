<!-- Modal -->
<div id="myModal" class="modal fade modal_modulo" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title modal-title-modulo"><span class="fa fa-book"></span>  {{ $modulo->nombre }}</h4>
      </div>

      <div class="modulo-pts">
        @foreach( $modulo->temas as $tema )
        <a href="#" data-item="{{ $loop->index }}" class="pto btn {{ $loop->index == 0 ? 'active' : '' }}"> {{ $tema->nombre }} </a>
        @endforeach
      </div>

      <div class="modal-body">        
        @foreach( $modulo->temas as $tema )
          <div class="seccion-modulo" data-item="{{ $loop->index }}">
            <?php echo htmlspecialchars_decode( $tema->contenido );  ?>
          </div>
        @endforeach
      </div>      
      
      <div class="modal-footer">
        <a href="#" class="btn btn-success"> <span class="fa fa fa-download"></span> Descargar </a>      
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>