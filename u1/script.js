$(document).ready(function(){

	$('#long_url').click(function(){
		$.post("proc.php", 
			{long_url: $('#long_url').val()}, 
			function(data){
				$('#msg').html(data);
			}
		);
		
	});

});