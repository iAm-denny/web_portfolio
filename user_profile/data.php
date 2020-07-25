<?php 
require_once '../database.php';

if(isset($_POST['chg_profile'])) {
	$id=$_GET['user_id'];
	
	$old_pwd=$_POST['old_pwd'];
	$old_pwd=md5($old_pwd);
	$new_pwd=$_POST['new_pwd'];
	$new_pwd=md5($new_pwd);
	$con_pwd=$_POST['con_pwd']	;
	$con_pwd=md5($con_pwd);

	$sql="SELECT * FROM users where id='$id'";
	$result=mysqli_query($conn,$sql);

		if($result){
				while ($row=mysqli_fetch_assoc($result)) {
							$pass=$row['password'];
								if($old_pwd != $pass){
									header("location:index.php?false=Your Old Password Does Not Match");
											return false;
								}
								else {
										if($new_pwd !=$con_pwd){
											header("location:index.php?notsame=Your password and confirmation password do not match");
											return false;
										}
										
										else if(strlen($new_pwd) < 05 ){
												header("location:index.php?less=Your Password should have more than 5 characters");
												return false;
											}
										else {
											$sql_update="UPDATE users SET password='$new_pwd' where id='$id'";
											$result_update=mysqli_query($conn,$sql_update);

											header("location:index.php?success=Updated Successfully");
										}
								}
				}
		}
		else {
			echo "Not Working";
		}
}
?>