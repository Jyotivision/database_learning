<?php 

	include ('db_co.php');
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$join_date=$_POST['join_date'];



//salting technique
// $salt = "djf*iwir£jg".rand(10000,99999)."kjg@g!jkg&gj";
$salt = sha1($password);//salting technioque make passowrd hashed(make dirfferent);
// var_dump($salt);die();


$insert="INSERT INTO users(name,username,password,salt,joined) VALUES('$name','$uname','$password','$salt','$join_date')";
	
	$query=mysqli_query($con,$insert);

	if($query){
		echo "Insertion succesful";
	}else{
		echo "Insertion unsuccesful";
	}
	
 ?>