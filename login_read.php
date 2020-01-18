<?php
	include "db.php";
	include 'function.php';
	include 'include/header.php';
?>
<div class="container">
	<h1 class="text-center">Read User</h1>
	<div class="col-sm-6">
	<pre>
		
		<?php showuserdata(); ?>	

	</pre>
	</div>
</div>
<?php include 'include/footer.php'; ?>