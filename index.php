<?php 
	include ('db_co.php');
?>
	<a href="create.php"><button class="button">Create</button></a>
<br>
<br>
<!-- ma khana khaera aaaucu -->
<table  border="1"  cellpadding="1" cellspacing="0">
<tr>
		<th>S.N</th>
		<th>Name</th>
		<th>User name</th>
		<th>Join date</th>
		<th>Update</th>		<th>Delete</th>
		
</tr>
 <?php
 $sql="SELECT * FROM users";
 $query=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($query)){
 ?>
 <tr>
 	<td><?php echo $row['userID']; ?></td>
 	<td><?php echo $row['name']; ?></td>
 	<td><?php echo $row['username']; ?></td>
 	<td><?php echo $row['joined']; ?></td>
 	<td><a href="update.php?id=<?php echo $row['userID']; ?>"><button class="button">Update</button></a></td>
 	<td><a href="delete.php?id=<?php echo $row['userID']; ?>"><button class="button">Delete</button></a></td>
 </tr>
 <?php 
 }
 mysqli_close($con);
 ?>