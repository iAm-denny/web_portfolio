<?php 
require_once '../database.php';

if(isset($_POST['btn_create'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$pwd=md5($pwd);
	$pwd2=$_POST['pwd2'];
	$pwd2=md5($pwd2);

	if(strlen($name) < 05 ){
		header("location:index.php?lessname=Username should have more than 5 characters");
		return false;
	}
	if($pwd != $pwd2){
		header("location:index.php?notsame=Your password and confirmation password do not match.");
		return false;
	}

	$sql_user="SELECT * FROM users where user_name='$name'";
	$result_user=mysqli_query($conn,$sql_user);
	 ///////////////////////////Check Email//////////////////////////////


	$sql_email="SELECT * FROM users where email='$email'";
	$result_email=mysqli_query($conn,$sql_email);

	if(mysqli_num_rows($result_user)>0){
		header("location:index.php?user_taken=User Name have been already taken");
		return false;
	}
	if(mysqli_num_rows($result_email)>0){
		header("location:index.php?email_taken=Email have already taken");
		return false;
	}
	else {
	$query="INSERT INTO users (user_name,email,password)VALUES('$name','$email','$pwd')";
	$result2=mysqli_query($conn,$query);
	header("location:../registration/index.php?success=Registration Successful.");

	}
}
?>