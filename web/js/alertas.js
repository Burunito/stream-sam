var activo = true,
	alertas = [];

$(document).ready(function() {
	$('#custom_html').bind('DOMSubtreeModified', function(input){
	  leerChat(input);
	});

	setInterval(function() {
		console.log(document.getElementsByTagName('iframe')[0].contentWindow.document);
		mostrarAlertas()
	}, 
	1000);
});	

function mostrarAlertas(){
	if(activo){
		alertas.forEach(function(item){
			console.log(item);
		});
	}
}

function leerChat(input){
	console.log(input);
}
