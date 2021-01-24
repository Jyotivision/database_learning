
<?php
$con=mysqli_connect("localhost","root","");
// $con=mysqli_connect("localhost","root","");
// echo $con;

if(!$con){

	die("couldn't connect".mysqli_error($con));
}else{
	echo "connection successful";
}
//selection of database
$db=mysqli_select_db($con,"phplearning");
if(!$db){

	die("could not connect".mysqli_error($db));
}else{
	echo "database connection successful";
}

?>