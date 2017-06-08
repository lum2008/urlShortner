<?php
	include("config.php");
	include("function.php");
	
	
	$msg = "";
	
if(isset($_GET['r']) || !empty($_GET['r']))
{
	$url_id = $_GET['r'];

	// Checking database if the the URL keyword is in it or not.
	// If query is true it will redirect to long URL.
	// Otherwise it will redirect to index.php ( our home page )
	
	$sql = "SELECT long_url FROM url_shortner WHERE url_id = '$url_id'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	if(mysqli_num_rows($result) == 1)
	{
		$l_url = $row['long_url'];
		header('Location:' .$l_url);
	}
	else
	{
		header('Location: index.php');
	}
}


	
if(isset($_POST["submit"]))	
{
	// Checking database if the the Long URL already exist or not.
	// If result is true it will show message that this URL already exit.
	// Otherwise it will add to database and you will get a short URL.
	
	$long_url = $_POST["long_url"];
	$long_url = mysqli_real_escape_string($db, $long_url);
	
	$sql="SELECT long_url FROM url_shortner WHERE long_url = '$long_url'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	if(mysqli_num_rows($result) == 0)
	{
		// URL Validation
		if (!filter_var($_POST['long_url'], FILTER_VALIDATE_URL) === false) 
		{
			$url_id = generateRandomString();
			$short_url = $site . "/" . $url_id;
			
			
			$query = mysqli_query($db, "INSERT url_shortner (url_id, long_url, short_url) VALUES ('$url_id','$long_url','$short_url')");
			
			if($query)
			{
				$msg = "<b>Your Short URL is</b>: <a href='".$short_url."'>$short_url</a>";
			}
			else
			{
				$msg = "There is some problem";
			}
		} 
		else 
		{
			$msg = $_POST['long_url'] ."is not a valid URL";
		}
	}
	else
	{
		$msg = "Sorry! This URL already exist.";
	}
}
?>


<!doctype html>
<html>

<head>
		<title> خدمة قص الروابط </title>
		<meta charset="UTF-8">
		<meta name="viweport" content="width=device-width, initial scale =1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href ="Shorter.css" rel="stylesheet" type="text/css"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
		<script 
		$(document).ready(function(){

			$('#long_url').click(function(){
				$.post("proc.php", 
					{long_url: $('#long_url').val()}, 
					function(data){
						$('#msg').html(data);
					}
				);
				
			});

});</script> 


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
            <form action="#" method="post" class="form">
            <div class="get-in-touch">
                <h3 class="text-center">
                    خدمة قص الروابط</h3>
                <div class="form-group">
                    <input type="url" class="inputBox" id="long_url" name="long_url" placeholder="الصق الرابط هنا" required />
                </div>
                <button class="btn btn-primary btn-block">!قص</button>			
			</div>
            </form>
			<h2 class="msg"><?php echo $msg;?></h2>

        </div>
    </div>
	
</div>
</body>
</html>

</div>
</div>
</body>

</html>
