<?php

	function doAdminRegiser($dbconn, $input) {
		 
		 #hash the password
	$hash = password_hash($clean['password'], PASSWORD_BCRYPT);

	#insert data
	$stmt = $conn->prepare("INSERT INTO admin(firstname, lastname, email, hash) VALUES(:fn, :ln, :e, :h)");

	}

?>