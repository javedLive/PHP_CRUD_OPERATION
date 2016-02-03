<?php
	require_once './classes/user.php';
	$obj=new User();
	if(isset($_POST['btn'])){
		$obj->save_user($_POST);
	}
?>

<html>
<head><title> Database Basic</title></head>
<body>
	<form action="sign_up.php" method="post">
		<table border="1">
			<tr><td>Personal Information</td><td></td></tr>
			<tr>
				<td> First Name</td>
				<td>
					<input type="name" name="first_name" value="<?php if(isset($_POST['first_number'])){ echo htmlentities($_POST['first_name']);} ?> "/>
				</td>
			</tr>
			<tr>
				<td> Last Name</td>
				<td>
					<input type="name" name="last_name" value="<?php if(isset($_POST['last_name'])){ echo htmlentities($_POST['last_name']);} ?> "/>
				</td>
			</tr>
			<tr>
				<td> Email Address</td>
				<td>
					<input type="name" name="email_address" value="<?php if(isset($_POST['email_address'])){ echo htmlentities($_POST['email_address']);} ?> "/>
					
				</td>
			</tr>
			<tr>
				<td> Password</td>
				<td>
					<input type="password" name="password" value="<?php if(isset($_POST['password'])){ echo htmlentities($_POST['password']);} ?> "/>
				</td>
			</tr>
			<tr>
				<td> Mobile Number</td>
				<td>
					<input type="name" name="mobile_number" value="<?php if(isset($_POST['mobile_number'])){ echo htmlentities($_POST['mobile_number']);} ?> "/>
				</td>
			</tr>
			<tr>
				<td> Address</td>
				<td>
					<textarea name="address" rows="4" cols="30"></textarea>
				</td>
			</tr>
			<tr>
				<td> City</td>
				<td>
					<input type="" name="city_name" value="<?php if(isset($_POST['city_name'])){ echo htmlentities($_POST['city_name']);} ?> "/>
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
					<input type="name" name="zip_code" value="<?php if(isset($_POST['zip_code'])){ echo htmlentities($_POST['zip_code']);} ?> "/>
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