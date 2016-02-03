<?php

require_once './classes/user.php';
$obj=new user();
$user_id=$_GET['user_id'];
$result=$obj->select_user_by_id($user_id);
$userinfo=mysql_fetch_assoc($result);
if(isset($_POST['btn'])){
	$obj->update_user($_POST);
}

?>

<html>
<head><title> Database Update</title></head>
<body>
	<form action="edit_user.php" method="post">
		<table border="1">
			<tr><td>Personal Information</td><td></td></tr>
			<tr>
				<td> First Name</td>
				<td>
					<input type="name" name="first_name" value="<?php echo $userinfo['first_name']; ?> "/>
					<input type="hidden" name="user_id" value="<?php echo $userinfo['user_id']; ?> "/>
				</td>
			</tr>
			<tr>
				<td> Last Name</td>
				<td>
					<input type="name" name="last_name" value="<?php echo $userinfo['last_name']; ?> "/>
				</td>
			</tr>
			<tr>
				<td> Email Address</td>
				<td>
					<input type="name" name="email_address" value="<?php echo $userinfo['email_address']; ?> "/>
					
				</td>
			</tr>
		
			<tr>
				<td> Mobile Number</td>
				<td>
					<input type="name" name="mobile_number" value="<?php echo $userinfo['mobile_number']; ?> "/>
				</td>
			</tr>
			<tr>
				<td> Address</td>
				<td>
					<textarea name="address" rows="4" cols="30"><?php echo $userinfo['address']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td> City</td>
				<td>
					<input type="" name="city_name" value="<?php echo $userinfo['city_name']; ?> "/>
				</td>
			</tr>
			<tr>
				<td> Country</td>
				<td>
					<select name="country_name">
						<option value=" ">Select Country ...</option>
						<option value="bangladesh">Bangladesh</option>
						<option value="srilanka">Srilanka </option>
						<option value="india">India</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> Zip Code</td>
				<td>
					<input type="name" name="zip_code" value="<?php echo $userinfo['zip_code']; ?>"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="btn" value="Save">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>