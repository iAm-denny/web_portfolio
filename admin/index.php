<?php 
session_start();
	require_once '../database.php';
	$user="SELECT * FROM users";
	$result=mysqli_query($conn,$user);
	$num_user=mysqli_num_rows($result);

	$message="SELECT * FROM message";
	$result_message=mysqli_query($conn,$message);
	$num_message=mysqli_num_rows($result_message);

  $view="SELECT * FROM viewer";
  $result_view=mysqli_query($conn,$view);
    while ($row=mysqli_fetch_assoc($result_view)) {
     $num_view=$row['viewer'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../fonts/manrope.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap4/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>

 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-4" id="nav_bar"> 
 				<h3 class="mt-3">Welcome</h3>
          			<ul>
          			  <li><a href="#">Home</a></li>
            		  <li><a href="animes/animes.php">Animes</a></li>
           			  <li><a href="newanimes/newanimes.php">New Animes</a></li>
                      <li><a href="popularanime/topanime.php">Popular Animes</a></li>
           			 </ul>
 			</div>

 			<div class="col-lg-8">
 				<div class="container mt-3">
 					<div class="row justify-content-around">
 						<div class="col-lg-3 col-lg-offset-1 user pt-5"><a href="user.php"><i class="fas fa-users"></i>&nbsp<span><?php echo $num_user?>&nbspUsers</span></a></div>
 						
 						<div class="col-lg-3 col-lg-offset-1 message pt-5"><a href="msg.php"><i class="far fa-envelope"></i>&nbsp<span><?php echo $num_message?>&nbspMessages</span></a></div>

 						<div class="col-lg-3 col-lg-offset-1 new pt-5"><a href="#"><i class="fas fa-eye"></i>&nbsp<span><?php echo $num_view?>&nbspViewer</span></a></div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>



<script type="text/javascript" src="../bootstrap4/jquery-min.js"></script>
<script type="text/javascript" src="../bootstrap4/pooper-min.js"></script>
<script type="text/javascript" src="../bootstrap4/bootstrap-min.js"></script>
</body>
</html>
