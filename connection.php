<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "izzyloan";
	
	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
	
	// Check connection 
	
	if($conn->connect_error){
		echo "Connection was failed";
	}
	
	// Remove this else code once database is connected otherwise everypage connected to database will show connection made on top. 
	
	else{
		
		echo "Connection made";
		
	}
?>
