<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="../fonts/manrope.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>

	<form action="data.php" method="post" id="form">
		<h2>Registration Form</h2>
		<div id="line"></div>
		<?php 
			if(isset($_GET['lessname'])){
				echo "<div class='error'>".$_GET['lessname']."</div>";
			}
		

		
			if(isset($_GET['notsame'])){
				echo "<div class='error'>".$_GET['notsame']."</div>";
			}
		
		
			if(isset($_GET['user_taken'])){
				echo "<div class='error' align='center'>".$_GET['user_taken']."</div>";
			}
		
		
			if(isset($_GET['email_taken'])){
				echo "<div class='error' align='center'>".$_GET['email_taken']."</div>";
			}

			if(isset($_GET['success'])){
				echo "<div class='success' align='center'>".$_GET['success']."<a href='../login/index.php'>Log In Here</a></div>";
			}
		?>
		
		<div class="user_name" >
			<input type="text" name="name" required><label for="User Name">User Name</label>
		</div>

		<div class="user_email">
			<input type="email" name="email" required><label for="Email">Email</label>
		</div>

		<div class="pwd">
			<input type="password" name="pwd" required><label for="Password">Passwrod</label>
		</div>

		<div class="con_pwd">
			<input type="password" name="pwd2" required><label for="Confirm Password">Confirm Password</label>
		</div>

		<div class="btn">
			<button name="btn_create">Create</button>
		</div>

	</form>





</body>
</html>
