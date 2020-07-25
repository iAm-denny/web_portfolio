<?php 
require_once "database.php";
session_start();
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
$sql="SELECT * FROM animes limit  $total,09";
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

	
	if(isset($_GET['suss'])){
		echo "<div class='suss'><span class='sent_msg'><i class='fas fa-times'></i></span>".$_GET['suss']."

		</div>";
	}

	if(isset($_GET['fails'])){
		echo "<div class='fails'><span class='sent_failed'><i class='fas fa-times'></i></span>".$_GET['fails']."</div>";
	}
	?>

	<div id="up">
		<a href="#nav"><img src="icon/up.png" width="50px" height="50px"></a>
	</div>
	<div class="contanier srh_main">
		
			<div align="center" id="srh_bar">
				<input type="text" name="" id="search" placeholder="Search">

					<div id="srh-btn">
						<span id="srh2"><i class="fas fa-times srh2"></i></span>
						<span id="srh1"><i class="fas fa-search srh1"></i></span>
					</div>
					
			</div>
			<div class="search_list"></div>
	</div>

	<div class="container mt-5 animelist">
  <div class="row">
  	<?php 
	while ($row=mysqli_fetch_assoc($result)) {
		$id=$row['id'];
		$img=$row['image'];
		$name=$row['name'];
		$type=$row['type'];
			?>
   			<div class="col-lg-1"></div>
			<div class="col-lg-3 mb-5" align="center">
				<a href="useraniabout.php?id=<?php echo $id?>" class="aniabout" target="_blank">
  				<img src="admin/animes/images/<?php echo $img?>" width="220px" height="300px"><br>
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
	$num_sql="SELECT * FROM animes";
	$num_result=mysqli_query($conn,$num_sql);
	$nums=mysqli_num_rows($num_result);
	$div_nums=ceil($nums/6);
		for($i=1;$i<$div_nums;$i++){
			echo "<div class='pagi'><a href='userindex.php?page=".$i."'>$i</a></div>";
		}
	?>
<?php 
require_once 'function/userfooter.php';
?>

<script type="text/javascript" src="bootstrap4/jquery-min.js"></script>
<script type="text/javascript" src="bootstrap4/pooper-min.js"></script>
<script type="text/javascript" src="bootstrap4/bootstrap-min.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1-min.js"></script>

<script type="text/javascript" src="js/app.js"></script>
</body>
</html>