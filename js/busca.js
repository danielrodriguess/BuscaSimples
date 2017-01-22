$(document).ready(function(){
	function mostraimagem(){
		$('#mostraimagem').html("<img src='img/loading.gif'>").fadeIn('fast');
	}
	function escondeimagem(){
		$('#mostraimagem').fadeOut('fast');
	}       
	function carregadados(valores, page, div){
		$.ajax({
			type:'POST',
			dataType:'html',
			url: page,
			beforeSend: function(){
				mostraimagem();
			},data: valores,
			success: function(msg){
				escondeimagem();
				var data = msg;
				$(div).html(data).fadeIn();				
			}
		});
	}
	carregadados(null, 'pesquisa.php', '#mostrarresultado');
	$('#pesquisa').keyup(function(){
		var valores = $('#formdepesquisa').serialize()
		var $parametro = $(this).val();
		if($parametro.length >= 1){
			carregadados(valores, 'pesquisa.php', '#mostrarresultado');
		}else{
			carregadados(null, 'pesquisa.php', '#mostrarresultado');
		}
	});
});