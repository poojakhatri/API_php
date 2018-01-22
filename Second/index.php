<?php
	require_once("DB.php");

	$db = new DB("localhost", "SocialNetwork","root", "password");
	if ($_SERVER['REQUEST_METHOD']== "GET"){

		echo "Hello World";
	}else if ($_SERVER['REQUEST_METHOD']== "GET"){
		echo "POST";	
	}
	else{
		http_response_code(405);
	}
?>