<?php
include 'db.php';
include 'function.php';
include 'include/header.php';
createuser();
?>


<div class="container">
	<h1 class="text-center">Create User</h1>
	<div class="col-sm-6">
		
		<form action="login_create.php" method="post">
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
<?php include 'include/footer.php'; ?>