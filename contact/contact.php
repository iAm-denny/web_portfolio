<?php 
require_once '../database.php';
if(isset($_POST['send'])){
	$name=$_POST['f_email'];
	$msg=$_POST['f_msg'];
	

	$sql="INSERT INTO message (email,messages)VALUES('$name','$msg')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:../index.php?suss=Sent Message");
	}
	else {
		header("location:../index.php?fails=Sent Message Failed");
	}

}
if(isset($_POST['usend'])){
	$uname=$_POST['f_uemail'];
	$umsg=$_POST['f_umsg'];
	

	$sql="INSERT INTO message (email,messages)VALUES('$uname','$umsg')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:../userindex.php?suss=Sent Message");
	}
	else {
		header("location:../userindex.php?fails=Sent Message Failed");
	}

}
?>




<!--///////////////////////  Mail Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!--php 
require_once '../database.php';
if(isset($_POST['send'])){
	$name=$_POST['f_email'];
	$msg=$_POST['f_msg'];
	$sub=$_POST['subject'];
	$owner="minlapyae8@gmail.com";

	if(mail($owner,$sub.$msg,$name)){
		header("location:../index.php?suss=Sent Message");
	}
	else {

	}
}
if(isset($_POST['usend'])){
	$name=$_POST['f_uemail'];
	$msg=$_POST['f_umsg'];
	$sub=$_POST['usubject'];
	$owner="minlapyae8@gmail.com";

	if(mail($owner,$sub.$msg,$name)){
		header("location:../userindex.php?ususs=Sent Message");
	}
}
-->
