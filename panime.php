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
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
else {
	$page=1;
}

$total=($page-1)*9;
$sql="SELECT * FROM topanim limit  $total,09";
$result=mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Denny</title>

<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap4/style.css">
<link href="fonts/manrope.css" rel="stylesheet"> 
<link href="fonts/mont.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>


<?php 
require_once 'function/userheader.php';
?>
	<div id="up">
		<a href="#nav"><img src="icon/up.png" width="50px" height="50px"></a>
	</div>
	<div class="contanier psrh_main">
		
			<div align="center" id="psrh_bar">
				<input type="text" name="" id="psearch" placeholder="Search">

					<div id="psrh-btn">
						<span id="psrh2"><i class="fas fa-times psrh2"></i></span>
						<span id="psrh1"><i class="fas fa-search psrh1"></i></span>
					</div>
					
			</div>
			<div class="psearch_list"></div>
	</div>

	<div class="container mt-5 animelist">
  <div class="row">
  	<?php 
	while ($row=mysqli_fetch_assoc($result)) {
		$id=$row['id'];
		$img=$row['images'];
		$name=$row['name'];
		$type=$row['type'];
			?>
   			<div class="col-lg-1"></div>
			<div class="col-lg-3 mb-5" align="center">
				<a href="panimeabout.php?pid=<?php echo $id?>" class="aniabout" target="_blank">
  				<img src="admin/popularanime/images/<?php echo $img?>" width="220px" height="300px"><br>
  				<h4><?php echo $name?></h4>
  				<div id="line"></div>
  				<div><?php echo $type?></div>
  			</a>

    		</div>
    <?php 
	}
    ?>
  </div>

</div>
	<?php 
	$num_sql="SELECT * FROM topanim";
	$num_result=mysqli_query($conn,$num_sql);
	$nums=mysqli_num_rows($num_result);
	$div_nums=ceil($nums/6);
		for($i=1;$i<$div_nums;$i++){
			echo "<div class='pagi'><a href='topanime.php?page=".$i."'>$i</a></div>";
		}
	?>
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