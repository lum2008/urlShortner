
<!doctype html>
<html>
<head>
		<title> خدمة قص الروابط </title>
		<meta charset="UTF-8">
		<meta name="viweport" content="width=device-width, initial scale =1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

		<link href ="Shorter.css" rel="stylesheet" type="text/css"/>


</head>

<body>
<div class="container">
    
	<script>
		
		for (var j=0; j<=12; j++)
		{
		document.write("<br />")
		}
	</script>
	
	<div class="row">
	<div class="col-mid-4">
		<div class="get-in-touch">
			<form id="urlShortner" action="a.php" method="post">
				<h2 class="text-center">خدمة قص الروابط</h2>
				<input type="text" name="long_url" class="form-control" required>
				<br />
			<input id="sub" type="submit" name="submit" class="btn btn-primary btn-block" value="قص!" >
			<button	id="cut"> CUT IT BITCH </button>
			</form>

		<span id="result"></span>
		</div>
	</div>
	
</div>


		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js'></script>
		<script src="js/index.js"></script>
		<script src="js/s.js"></script>



</body>

</html>
