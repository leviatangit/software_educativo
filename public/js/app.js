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

	var $idComponente = $(this).attr('data-id');

	$.ajax({

		type : 'get',
		url : 'infoComponente',
		data : {
			id : $idComponente
		},
		success : function(data){
			console.log(data);
		}
	});

	$('#ModalComponente').modal();

});


});