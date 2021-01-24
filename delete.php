<?php 
	include ('db_co.php');
	$id=$_GET['id'];
	$sqll="DELETE FROM users where userID='$id'";
	$query=mysqli_query($con,$sqll);
	if ($query) {
		echo "Successfully deleted";
	}else{
		echo "Delete unsuccessful";
	}
	mysqli_close($con);

 ?>