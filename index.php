<?php 
session_start();
require_once 'database.php';
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
else {
	$page=1;
}

$total=($page-1)*9;
$sql="SELECT * FROM animes limit  $total,09";
$result=mysqli_query($conn,$sql);

$_SESSION['num_view']=$_SESSION['num_view']+1;
	$num_view=$_SESSION['num_view'];
  $sql_view="UPDATE viewer SET viewer='$num_view' WHERE id=1";
  $result_view=mysqli_query($conn,$sql_view);

?><!DOCTYPE html>
<html>
<head>
	<title>DenAnime</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap4/style.css">
<link href="fonts/manrope.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="fonts/mont.css"> 
</head>
<body>
	<div id="up">
		<a href="#nav"><img src="icon/up.png" width="50px" height="50px"></a>
	</div>
<?php
require_once 'function/header.php';
	if(isset($_GET['suss'])){
		echo "<div class='suss'><span class='sent_msg'><i class='fas fa-times'></i></span>".$_GET['suss']."

		</div>";
	}

	if(isset($_GET['fails'])){
		echo "<div class='fails'><span class='sent_failed'><i class='fas fa-times'></i></span>".$_GET['fails']."</div>";
	}
?>

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
				<a href="aniabout.php?id=<?php echo $id?>" class="aniabout" target="_blank">
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
			echo "<div class='pagi'><a href='index.php?page=".$i."'>$i</a></div>";
		}
	?>

	<?php require_once 'function/footer.php';
	?>

<script type="text/javascript" href="bootstrap4/jquery-min.js"></script>
<script type="text/javascript" href="bootstrap4/pooper-min.js"></script>
<script type="text/javascript" href="bootstrap4/bootstrap-min.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1-min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
