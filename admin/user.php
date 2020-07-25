<?php 
	require_once '../database.php';
	$sql="SELECT * FROM users";
	$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
</head>
<body>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../fonts/manrope.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap4/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-4" id="nav_bar"> 
 				<h3 class="mt-3">Welcome</h3>
          			<ul>
          			  <li><a href="index.php">Home</a></li>
            		  <li><a href="animes/animes.php">Animes</a></li>
           			  <li><a href="newanimes/newanimes.php">New Animes</a></li>
                      <li><a href="popularanime/topanime.php">Popular Animes</a></li>
           			 </ul>
 			</div>

 			<div class="col-lg-8">
 				<table class='table table-dark table-hover'>
		<tr>
			<th>Id</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Time</th>
		</tr>
		<?php 
			while ($row=mysqli_fetch_assoc($result)) {
				$id=$row['id'];
				$name=$row['user_name'];
				$email=$row['email'];
				$pwd=$row['password'];
				$time=$row['time'];
			
		?>
				<tr>
					<td><?php echo $id?></td>
					<td><?php echo $name?></td>
					<td><?php echo $email?></td>
					<td><?php echo $pwd?></td>
					<td><?php echo $time?></td>
					
				</tr>
				<?php 
					}
				?>

	</table>
 			</div>
 			
 		</div>
 	</div>  


	





<script type="text/javascript" src="../bootstrap4/jquery-min.js"></script>
<script type="text/javascript" src="../bootstrap4/pooper-min.js"></script>
<script type="text/javascript" src="../bootstrap4/bootstrap-min.js"></script>
</body>
</html>