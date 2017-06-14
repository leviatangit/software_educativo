$(document).ready(function(){

$('.seccion').on('click', function(e){
	e.preventDefault();

	var $this = $(this),
		seccion = $this.attr('data-seccion');

	if( !$this.is('.activado') ){

		$('.seccion').removeClass('activado');
		$this.addClass('activado');

		$('.row-seccion').each(function(){
			
			$(this).attr('data-seccion') == seccion ? $(this).show() : $(this).hide();			
		});
	}
})


$('.item-c').on('click', function(e){

	e.preventDefault();

	var $modal = $("#ModalComponente");
	var $id_componente = $(this).attr('data-id');
	var $titulo_componente = $(this).attr('data-nombre');
	var $contenido_componente = $(this).attr('data-contenido');
	var $url = $(this).find('img').attr('src');

	$modal.find('.modal_t').text( $titulo_componente );
	$modal.find('.modal-body').empty();	
	$modal.find('.modal-body').append( $contenido_componente );
	$modal.find('.imagen-mini').attr({
		'outline' : '2px solid red',
		'src' : $url
	});

	$modal.find('#componente_id').val( $id_componente );
	$('#ModalComponente').modal();
});


});