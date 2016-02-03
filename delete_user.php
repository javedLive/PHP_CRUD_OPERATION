<?php

require_once './classes/user.php';
$obj=new user();
$user_id=$_GET['user_id'];
$obj->delete_user($user_id);
?>
