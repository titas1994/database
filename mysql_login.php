<?php

if(isset($_POST['submit'])){

	//echo "Information recived";
	$username =$_POST['username'];
	$password =$_POST['password'];

	// if($username && $password){

	// 	echo "$username";
	// 	echo "$password";
	// }
	// else{

	// 	echo "This Filed Not empty";
	// }

	$connection = mysqli_connect('localhost','root','','loginapp');
	if($connection){

		echo "Database Connted Sucessfull";
	}
	else{

		die("Database Not Connted");
	}


}



?>

<!DOCTYPE html>
<html>
<head>
	<title>MYSQL- LOGIN</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

	<div class="col-sm-6">
		
		<form action="mysql_login.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input class="btn btn-success" type="Submit" name="submit" value="Login">
		</form>

	</div>
</div>
</body>
</html>