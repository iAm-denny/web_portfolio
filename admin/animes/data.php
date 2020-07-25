<?php 
require_once '../../database.php';

if(isset($_POST['add'])){
	$name=$_POST['name'];
	$type=$_POST['type'];
	$ep=$_POST['episode'];
	$date=$_POST['re_data'];
	$end=$_POST['end'];
	$rate=$_POST['rate'];
	
	$review=mysqli_real_escape_string($conn,$_POST['review']);
	$img=$_FILES['img']['name'];
	$imgtmp=$_FILES['img']['tmp_name'];
	$folder='images/';
	move_uploaded_file($imgtmp,$folder.$img );
	
$sql="INSERT INTO animes (image,name,type,episode,released_date,end_date,rating,review)VALUES('$img','$name','$type','$ep','$date','$end','$rate','$review')";
$result=mysqli_query($conn,$sql);
	if($result){
		header("location:animes.php?success=Added Successfully");
	}
	else {
		header("location:animes.php?error=Something Wrong");
	}
}

if(isset($_POST['update'])){
	$id=$_GET['up_id'];
	$up_name=$_POST['up_name'];
	$up_type=$_POST['up_type'];
	$up_ep=$_POST['up_ep'];
	$up_date=$_POST['up_res'];
	$up_end=$_POST['up_end'];
	$up_rate=$_POST['up_rate'];
	
	$up_review=mysqli_real_escape_string($conn,$_POST['up_review']);
	$up_img=$_FILES['up_img']['name'];
	$up_imgtmp=$_FILES['up_img']['tmp_name'];
	$folder='images/';
	move_uploaded_file($up_imgtmp,$folder.$up_img );

		$up_sql="UPDATE animes SET image='$up_img',
		name='$up_name',
		type='$up_type',
		episode='$up_ep',
		released_date='$up_date',
		end_date='$up_end',
		rating='$up_rate',
		review='$up_review'

		 WHERE id='$id'";
		$up_result=mysqli_query($conn,$up_sql);
		if($up_result){
			header("location:animes.php?success=Updated Successfully");
		}
		else {
			echo "error";
		}
}


?>