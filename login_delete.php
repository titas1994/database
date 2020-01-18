<?php
	include 'function.php';
	include 'include/header.php';
		deleterows();
?>
<div class="container"> 

	<div class="col-sm-6">
		
<form action="login_delete.php" method="post">
			<h1 class="text-center">Delete User</h1>
			<div class="form-group">
				<label for="id">ID</label>
				<select name="id" id="">
					<?php
						showalldata();
					?>	
				</select>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username"
				 class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" value="" class="form-control">
			</div>
			<input class="btn btn-success" type="Submit" name="submit" value="Delete">
		</form>


	</div>

</div>
<?php include 'include/footer.php'; ?>