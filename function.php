<?php
 
 include "db.php";


function createuser(){ ////use for create user in create file

	global $connection;
	if(isset($_POST['submit'])){
	$username =$_POST['username'];
	$password =$_POST['password'];
	$connection = mysqli_connect('localhost','root','','loginapp');
	// if($connection){

	// 	echo "Database Connted Sucessfull. User data Sucessfull create";
	// }
	// else{

	// 	die("Database Not Connted");
	// }
	$query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
	$result = mysqli_query($connection,$query);

	if(!$result){
		die('query failed'. mysqli_error());
	}
	else{
		echo "User data Sucessfull create";
	}

}
}

	function showuserdata(){ //use for show id and data in show file
		global $connection;
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection,$query);

		if(!$result){
			die('query failed'. mysqli_error());
	}

	while ($row = mysqli_fetch_row($result)) {
		print_r($row);
		
	}
	}

	function showusertable(){ // show data in table format in showdatatable
		global $connection;
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection,$query);
		if(!$result){

			die("connection problem".mysqli_error());
		}
			if ($result->num_rows > 0) {
    				echo "<tr><th>ID</th><th>UserName</th><th>Password</th></tr>";
    							// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td> ".$row["password"]."</td>";
    		}
    			echo "</tr>";
			} 
			else {
    			echo "0 results";
			}
	}

 function showalldata(){   //use for show id in update file
 	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection,$query);

	if(!$result){
		die('query failed'. mysqli_error());
	}
	while ($row = mysqli_fetch_assoc($result)) {
							$id = $row['id'];
							echo "<option value='$id'>$id</option>
					";

						}


	}
function updatetable(){  //use for update data in update file
		global $connection;
		if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
		$result = mysqli_query($connection,$query);
		if(!$result){
			die("Database error". mysqli_error($connection));
		}else{
		echo "User data Sucessfull Update";
	}
	}
}
	function deleterows(){ //use for delete id and data in delete file
		global $connection;
		if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		$query = "DELETE FROM users WHERE id = $id";
		$result = mysqli_query($connection,$query);
		if(!$result){
			die("Database error". mysqli_error($connection));
		}else{
		echo "User data Sucessfull Delete";
	}
	}
}

?>