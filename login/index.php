<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link href="../fonts/manrope.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>

	<form action="data.php" method="post" id="form">
		<img src="wave.svg" class="svg">
		<h2>Login</h2>
		<div id="line"></div>
		<?php 
			if(isset($_GET['fill'])){
				echo "<div class='error' align='center'>".$_GET['fill']."</div>";
			}
			if(isset($_GET['wrg_name'])){
				echo "<div class='error' align='center'>".$_GET['wrg_name']."</div>";
			}
			if(isset($_GET['wrg_pwd'])){
				echo "<div class='error' align='center'>".$_GET['wrg_pwd']."</div>";
			}
		?>
			<div class="user_name">
				<i class="fas fa-user-alt log"></i>
					<input type="text" name="name" placeholder="User Name" id="user">
			</div>
 
			<div class="pwd">
				<i class="fas fa-key log"></i>
					<input type="password" name="pwd" placeholder="Password" id="pws">
					<span><i class="fas fa-eye pwd_show"></i></span>
					<span><i class="fas fa-eye-slash pwd_hide"></i></span>
			</div>

			<div class="btn">
				<button name="btn_login">Login</button>
			</div>

	</form>

<script type="text/javascript" src="../js/jquery-3.4.1-min.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
</body>
</html>