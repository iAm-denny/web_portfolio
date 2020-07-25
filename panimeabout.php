<?php 
session_start();
require_once 'database.php';
$user_id= $_SESSION['$user_id'];
$usql="SELECT * FROM users where id='$user_id'";
$uresult=mysqli_query($conn,$usql);
if($uresult){
	while ($row=mysqli_fetch_assoc($uresult)) {
		
		$user_email=$row['email'];
	}
}
if(isset($_GET['pid']));
$id=$_GET['pid'];
$sql="SELECT * FROM topanim where id='$id'";
$result=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_assoc($result)){
		$img=$row['images'];
		$name=$row['name'];
		$type=$row['type'];
		$ep=$row['episode'];
		$res=$row['released_date'];
		$end=$row['end_date'];
		$rate=$row['rating'];
		$review=$row['review'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap4/style.css">
<link href="fonts/manrope.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	<?php 
require_once 'function/userheader.php';
?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-5" align="center">
				<img src="admin/popularanime/images/<?php echo $img?>" width="220px" height="300px">
			</div>
			<div class="col-lg-7" align="left">
				<h2 class="headname"><?php echo $name?></h2>
				<div id="line" class="mb-3"></div>
				<div><strong>Genre - </strong><?php echo $type?></div>
				<div><b>Episode - </b><?php echo $ep ?></div>
				<div><b>Released Date -</b><?php echo $res?></div>
				<div><b>Ended In </b><?php echo $end?></div>

				<div><b>Rate - </b><?php echo $rate?>&nbsp / 10</div>
				<h3 align="left" class="mt-5">Review</h3>
				<div class="line2"></div>
				<p align="left"><?php echo $review?></p>
			</div>
		</div>
	</div>

<?php 
require_once 'function/userfooter.php';
?>






<script type="text/javascript" href="bootstrap4/jquery-min.js"></script>
<script type="text/javascript" href="bootstrap4/pooper-min.js"></script>
<script type="text/javascript" href="bootstrap4/bootstrap-min.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1-min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>