<?php 
require_once '../../database.php';

	 $sql = "DELETE FROM newanime WHERE id = '".$_POST["id"]."'";
	$result=mysqli_query($conn,$sql);

?>