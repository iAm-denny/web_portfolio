<?php 
require_once '../../database.php';
if(isset($_POST['pview'])){
$sql="SELECT * FROM topanim";
$result=mysqli_query($conn,$sql);
$output="";
$output.="<table class='table table-dark table-hover'>
			<tr class='thead-dark header' align='center'>
				<th>Id</th>
				<th>Image</th>
				<th>Name</th>
				<th>Type</th>
				<th>Episode</th>
				<th>Released Date</th>
				<th>End In</th>
				<th>Rating</th>
				<th >Review</th>
				<th>Time</th>
				<th></th>
				<th></th>
			</tr>
		  ";
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
			$output .="<tr class='anims'>
						<td>".$row['id']."</td>
						<td><img src='images/".$row['images']."' width='130px' height='150px'></td>
						<td>".$row['name']."</td>
						<td>".$row['type']."</td>
						<td>".$row['episode']."</td>
						<td>".$row['released_date']."</td>
						<td>".$row['end_date']."</td>
						<td>".$row['rating']."</td>
						<td><div class=' review'>".$row['review']."</div></td>
						<td>".$row['time']."</td>
						<td><button class='btn btn-danger pdel' data-pdel='".$row['id']."'>Delete</button></td>
						<td><button class='btn btn-primary'><a href='pupdate.php?update=".$row['id']."'>Update</button></td>
					   </tr>";
	}
}
$output .="</table>";
echo $output;
}
?>

