$(document).ready(function(){
	$('form').submit(function(e){
		//deshabilitamos la ejecuacion del formulario estandar
		e.preventDefault();

		var data = $(this).serializeArray();
		data.push({name: 'tag',value:'login'});

		$.ajax({
			url: 'php/proces.php',
			type: 'post',
			dataType: 'json',
			data: data,
			beforeSend: function(){
				$('#icon').css('display','inline');
			}
		})
		.done(function(){
			$('p').html("Correcto");
		})
		.fail(function(){
			$('p').html("No Correcto");
		})
		.always(function(){	
				
			setTimeOut(function(){
				$('#icon').hide();
			},1000);
			
		});
	});
});