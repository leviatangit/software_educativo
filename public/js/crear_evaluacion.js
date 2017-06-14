$(document).ready(function(){

$('.items-check:checked').prop('checked','false');


var app = {
	table_items : $('.table-agarrados'),
	table_seleccion : $('.table-seleccion'),
	cantidad_seleccionados : $('.cantidad_seleccionados'),
	id_items : [],
	elem_borrar : null,

	show_cont : function( signo = true ){
		app.cantidad_seleccionados.text( app.id_items.length );
		/*
		if( signo ){
			console.log(app.id_items.length + 1)
		}
		else{
			console.log( app.id_items.length - 1 )
		}
		*/
		//signo == true ? app.cantidad_seleccionados.text( app.id_items.length + 1 ) : app.cantidad_seleccionados.text( app.id_items.length - 1 );
	},

	remove_coleccion : function( elemento_borrar ){
		return elemento_borrar != app.elem_borrar;
	},

	add_coleccion : function(){

		if( this.checked ){
			app.id_items.push( this.value );
			app.show_cont( this.checked );
		}
		else {
			app.elem_borrar = this.value;
			var new_array = app.id_items.filter( app.remove_coleccion )	
			app.id_items = new_array;
		}

		app.show_cont( this.checked );
	},	

	enviar : function(e){
		
		e.preventDefault();		
		if( app.id_items.length > 5 ){
			console.log('enviar');
		}

		else {
			console.log('notificacion');
		}
	},
}


$('#finalizar').on('click' , app.enviar );
$('.items-check').on('click' , app.add_coleccion );


})