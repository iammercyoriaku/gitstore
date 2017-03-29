<?php

#title

$page_title = "Register";

#include header...

include'includes/header.php';

if(array_key_exists('register', $_POST)){
	#cache errors
	$errors = [];

	#validate first name

	if(empty($_POST['fname'])){
		$errors[] = "Please enter a First Name";

	}
echo ".<br/>.";
	if(empty($_POST['lname'])){
		$errors[] = "Please enter a Last Name";
	}

	if(empty($_POST['email'])){
		$errors[] = "Please enter an Email Address ";
	}

	if(empty($_POST['password'])){
		$errors[] = "Please enter a Password";
	}

	if(empty($_POST['pword']) || ($_POST['pword']) != $_POST['password'])){
		$errors[] = "Password doesn't match";
	}

	if(empty($errors)){
		//do the database stuff
	} else {
		foreach($errors as $err){
			echo $err;
		}
	}
}

?>


<div class="wrapper">
		<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="register.php" method ="POST">
			<div>
				<label>first name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>
				<label>last name:</label>	
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>
				<label>confirm password:</label>	
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="login.php">login</a></h4>

<?php

#including the footer...

include 'includes/footer.php';

?>		