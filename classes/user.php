<?php

class User{
	public function __construct(){

		$host='localhost';
		$user='root';
		$password='';
		$conn=mysql_connect($host,$user,$password);
		if(!$conn){
			die("Database Not Connected" . mysql_error());
		}

		mysql_select_db("db_sign_up");
		//echo "Database created! ";
	}

	public function save_user($data){
		$sql="INSERT INTO tbl_user(first_name,last_name,email_address,password,mobile_number,address,
			                       city_name,country_name,zip_code)
			       VALUES('$data[first_name]','$data[last_name]','$data[email_address]','$data[password]',
			      '$data[mobile_number]','$data[address]','$data[city_name]','$data[country_name]','$data[zip_code]')";
			if(!mysql_query($sql)){
				die("sl Error". mysql_error());
			}
			echo "Saved Successfully!";
			//mysql_close($conn);
	}

	public function select_all_user(){
		$sql = "SELECT * FROM tbl_user";
		$result=mysql_query($sql);
		return $result;
	}
	public function delete_user($user_id){
		$sql = "DELETE FROM tbl_user WHERE user_id='$user_id'";
		mysql_query($sql);
		header("location:view_data.php");
	}

	public function select_user_by_id($user_id){
		$sql= "SELECT * FROM tbl_user WHERE user_id='$user_id'";
		$result=mysql_query($sql);
		return $result;
	}

	public function update_user($data)
		{
			$sql= "UPDATE tbl_user SET first_name='$data[first_name]',last_name='$data[last_name]',
			email_address='$data[email_address]',mobile_number='$data[mobile_number]',
			address='$data[address]',city_name='$data[city_name]',
			country_name='$data[country_name]',zip_code='$data[zip_code]'
			 WHERE user_id='$data[user_id]' ";

			 if(!mysql_query($sql)){
			 	die("Sql Error".mysql_error());
			 }
			 header("location:view_data.php");
	
		}
}

?>