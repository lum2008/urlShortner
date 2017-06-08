$("#sub").click( function () {
	var data = $("#urlShortner :input").serializeArray();
	
	$.post( $("#urlShortner").attr("action"), data, function (info) {
		$("#result").html(info);
		
		
	}

});

$("#urlShortner").submit( function() {
	return false;
	
	
	
});