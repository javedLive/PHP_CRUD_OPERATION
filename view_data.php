<?php
	require_once './classes/user.php';
	$obj=new User();
	$result=$obj->select_all_user();
	
?>

<table border="1">
	<tr>
		<th>Name</th>
		<th>Email Address</th>
		<th>Mobile Number</th>
		<th>Country</th>
		<th>Action</th>
	</tr>
	<?php
	while($row=mysql_fetch_assoc($result))
	{  
		?>
	<tr>
		<td><?php echo $row['first_name'].' '.$row['last_name']; ?> </td>
		<td><?php echo $row['email_address'] ?></td>
		<td><?php echo $row['mobile_number'] ?></td>
		<td><?php echo $row['country_name'] ?></td>
		<td>
			<a href="edit_user.php?user_id= <?php echo $row['user_id']?>">Edit</a> | 
			<a href="delete_user.php?user_id= <?php echo $row['user_id']?>">Delete</a>
		</td>
	</tr>
	<?php }  ?>
</table>