<?php 
session_start();
require_once '../database.php';
$user_id= $_SESSION['$user_id'];
$sql="SELECT * FROM users where id='$user_id'";
$result=mysqli_query($conn,$sql);
if($result){
	while ($row=mysqli_fetch_assoc($result)) {
		
		$user_email=$row['email'];
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Setting</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="../bootstrap4/style.css">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>


<body>
	
	<?php require_once 'userheader.php';?>

	<div class="container">
		<div class="row mt-5 pt-3">
			<div class="col-lg-4" align="center">
				<h3>Your Account Setting</h3>
									<?php 
						if(isset($_GET['false'])){
							echo "<div class='error mb-2' align='center'>".$_GET['false']."</div>";
						}
						if(isset($_GET['notsame'])){
							echo "<div class='error mb-2' align='center'>".$_GET['notsame']."</div>";
						}
						if(isset($_GET['less'])){
							echo "<div class='error mb-2' align='center'>".$_GET['less']."</div>";
						}
						if(isset($_GET['success'])){
							echo "<div class='success mb-2' align='center'>".$_GET['success']."</div>";
						}

					?>
				<i class="fas fa-cog sett"></i><br><br>
				<div>You can't change your Username and Email.</div>

			</div>
			<div class="col-lg-1 mt-3"></div>

			<div class="col-lg-7">

				<form action="data.php?user_id=<?php echo $_SESSION['$user_id']?>" method="post" id="user_form">


					<input type="text" name="user_name" class="form-control mb-4 user" value="<?php echo $_SESSION['$name']?>">

					<input type="text" name="user_email" class="form-control mb-4 email" value="<?php echo $user_email ?>">
				
					<input type="password" name="old_pwd" class="form-control mb-4 old_pwd" placeholder="Old Password">
					<span><i class="fas fa-eye old_show"></i></span>
					<span><i class="fas fa-eye-slash old_hide"></i></span>
				
					<input type="password" name="new_pwd" class="form-control mb-4 new_pwd" placeholder="New Password">
					<span><i class="fas fa-eye new_show"></i></span>
					<span><i class="fas fa-eye-slash new_hide"></i></span>

					<input type="password" name="con_pwd" class="form-control mb-4 con_pwd" placeholder="Confirm New Password">
					<span><i class="fas fa-eye con_show"></i></span>
					<span><i class="fas fa-eye-slash con_hide"></i></span>

					<button name="chg_profile" class="bth_change mb-5">Change</button>
				</form>
			</div>
		</div>
	</div>




<script type="text/javascript" href="bootstrap4/jquery-min.js"></script>
<script type="text/javascript" href="bootstrap4/pooper-min.js"></script>
<script type="text/javascript" href="bootstrap4/bootstrap-min.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1-min.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
</body>
</html>