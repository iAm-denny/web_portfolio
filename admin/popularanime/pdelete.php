<?php 
require_once '../../database.php';

	 $sql = "DELETE FROM topanim WHERE id = '".$_POST["id"]."'";
	$result=mysqli_query($conn,$sql);

?>