<?php 
$update_id=$_GET['id'];
	include ('db_co.php');
	$sql="SELECT * FROM users where userID=$update_id";
	// var_dump($sql);die();
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
 ?>
 <form action="updateform.php" method="post">
 <input type="hidden" name="id" value="<?php echo $update_id;?>">
   <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br><br>
  <label for="uname">User name:</label>
  <input type="text" id="uname" name="uname" value="<?php echo $row['username']; ?>"><br><br>
<!--   <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <label for="join_date">Joindate:</label> -->
  <!-- <input type="date" id="join_date" name -->
  <input  type="submit" value="submit">
 	
 </form>