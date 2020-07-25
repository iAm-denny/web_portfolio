<?php 
session_start();
require_once '../database.php';

if(isset($_POST['btn_login'])){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$pwd=md5($pwd);

	if(empty($name) || empty($pwd)){
		header("location:index.php?fill=You Must fill your information to login in");
		return false;
	}
	
	$sql_cu="SELECT * FROM users where user_name='$name'";
	$result_cu=mysqli_query($conn,$sql_cu);

	$sql_cp="SELECT * FROM users where password='$pwd'";
	$result_cp=mysqli_query($conn,$sql_cp);

	if(mysqli_num_rows($result_cu) ==0 ) {
		header("location:index.php?wrg_name=User Name does not Exist");
		return false;
	}
	else if(mysqli_num_rows($result_cp) ==0){
		header("location:index.php?wrg_pwd=Wrong Password");
		return false;
	}
	else {
		$sql="SELECT * FROM users where user_name='".$name."' AND password='".$pwd."' limit 1";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result) ==1){
				while ($row=mysqli_fetch_assoc($result)) {
					$user_id=$row['id'];
				}
			$_SESSION['$name']=$name;
			$_SESSION['$user_id']=$user_id;
			$_SESSION['$old_pwd']=$pwd;
			header("location:../userindex.php");

		}
	}
}
?>