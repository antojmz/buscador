

var CallApi = function(){
	var string = $("#InputSearch").val();
	if (string.length > 0){
		$("#DivResult").empty();
		$.post( "http://buscador.int/api/search/"+string, function(data) {
			if (data.length > 0){
  				$("#DivResult").html(JSON.stringify(data));
			}else{
				alert("La busqueda no arrojo resultados");
			}
		});
	}else{
		alert("Ingrese un texto de busqueda");
	}
}

$(document).ready(function(){
	$("#consultar").click(function() {
 		CallApi();
	});
});