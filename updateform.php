<?php 
	include ('db_co.php');
	$id=$_POST['id'];
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$sql_query="UPDATE users SET name='$name',username='$uname' WHERE userID='$id'";
	// var_dump($sql_query);die(); use to check error 
	$result=mysqli_query($con,$sql_query);
	if (!$result) {
		echo "Unsuccesful";
	}else{
		echo "Successful";
	}

 ?>