<?php 
require_once '../../database.php';
if(isset($_GET['update'])){
	$id=$_GET['update'];
	$sql="SELECT * FROM newanime where  id='$id'";
	$result=mysqli_query($conn,$sql);
if($result){
	while ($row=mysqli_fetch_assoc($result)) {
		$img=$row['images'];
		$name=$row['name'];
		$type=$row['type'];
		$ep=$row['episode'];
		$res=$row['released_date'];
		$end=$row['end_date'];
		$rate=$row['rating'];
		$review=$row['review'];
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="../../fonts/manrope.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap4/style.css">
<style type="text/css">
	textarea {
		height: 100px;
	}
</style>

</head>
<body>
	<div class="container-fluid">
		<div class="col-lg-3"></div>

		<div class="container col-lg-6">

			<form action="data.php?up_id=<?php echo $id?>" method="POST" class="mt-5 pt-5" enctype= "multipart/form-data">
				<h2 align="center">Update</h2>
				<h6 class="text-info">Your Old Image source is &nbsp &nbsp <b>"denny3/admin/newanimes/images/<?php echo $img?>"</b> </h6>
				<h6 class="text-danger">You need to add image again</h6>
					<input type="file" name="up_img" class="form-control mt-3" value="<?php echo $img?>" required>

					<input type="text" name="up_name" class="form-control mt-3" value="<?php echo  $name ?>" required>

					<input type="text" name="up_type" class="form-control mt-3" value="<?php echo  $type ?>" required>

					<input type="text" name="up_ep" class="form-control mt-3" value="<?php echo  $ep?>" required>

					<input type="text" name="up_res" class="form-control mt-3" value="<?php echo  $res ?>" required>

					<input type="text" name="up_end" class="form-control mt-3" value="<?php echo  $end ?>" required>

					<input type="text" name="up_rate" class="form-control mt-3" value="<?php echo  $rate ?>" required>

					<textarea class="form-control mt-3" name="up_review"  required>><?php echo $review?></textarea>

					

					<input type="submit" class="btn btn-info" value="Update" name="nupdate">
			</form>
		</div>


		<div class="col-lg-3"></div>
		
	</div>


<script type="text/javascript" src="../../bootstrap4/jquery-min.js"></script>
<script type="text/javascript" src="../../bootstrap4/pooper-min.js"></script>
<script type="text/javascript" src="../../bootstrap4/bootstrap-min.js"></script>
</body>
</html>