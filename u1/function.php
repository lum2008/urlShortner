<?php

function generateRandomString() 
{
	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';

	for ($i = 0; $i < 5; $i++) 
	{
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	
	return  $randomString;
}

?>