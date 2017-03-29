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

define("MAX_FILE_SIZE", "2097152");

$ext = ["image/jpg", "image/jpeg", "image.png"];

if(array_key_exists('save', $_POST)){
	$errors = [];
	#BE SURE A FILE IS SELECTED
	if(empty($_FILES['pic']['name'])){
		$errors['pic'] = "please choose a file";
	}
	

# check file size...
if($_FILES['pic']['size'] > MAX_FILE_SIZE){
	$errors['pic'] = "file size exceeds maximum. maximum: ". MAX_FILE_SIZE;
}

//check extension...
if(!in_array($_FILES['pic']['type'], $ext)){
	$errors['pic'] = "invalid file type";
}

#generate random number to append
$rnd = rand(0000000000, 999999999);

#strip filename for spaces
$strip_name = str_replace(" ", "_", $_FILES['pic']['name']);

$filename = $rnd.$strip_name;
$destination = 'upload/'.$filename;

if(!move_uploaded_file($_FILES['pic']['tmp_name'], $destination)){
	$errors[] = "file uploaded failed";
}

if(empty($errors)){
	echo "done";

} else {
	foreach($errors as $err){
		echo $err.'<br/>';
	}
  }

}
?>

<form id="register" method="POST" enctype="multipart/form-data">
	<p>Please upload a file</p>
	<input type="file" name="pic">

	<input type="submit" name="save">

</form>	
