<?php 

/*define('DBNAME', 'onlinestore');
define('DBUSER', 'root');
define('DBPASS', 'ilovecupcakes');

try{
	# prepare a pdp instance
	$conn = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);

	#SET VERBOSE ERROR MODES
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

} catch(PDOExceptiom $e) {
	echo $e->getMessage();
}*/



if(array_key_exists('save', $_POST)){
	print_r($_FILES);
}

?>

<form id="register" method="POST" enctype="multipart/form-data">
	<p>Please upload a file</p>
	<input type="file" name="pic">

	<input type="submit" name="save">

</form>	
