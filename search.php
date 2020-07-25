 <?php  
 require_once 'database.php';
 if(isset($_POST['search'])){
      $output = '';  
      $search =$_POST['search'];
      $sql = "SELECT * FROM animes WHERE name LIKE '%".$search."%'";  
      $result = mysqli_query($conn, $sql);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result)> 0)  {  
           while($row = mysqli_fetch_assoc($result))  {  
                $output .= '<li><a href="aniabout.php?id='.$row["id"].'" target="_blank">
                <img width="80px" height="70px" src="admin/animes/images/'.$row['image'].'">

                '.$row["name"].'</a></li>';  
           }  
      }
      else{  
           $output .= '<li>Not Data Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
    }
/*////////////////////////////////////////////////////////////////////////
   */  
  if(isset($_POST['nsearch'])){
     $output = '';  
      $nsearch =$_POST['nsearch'];
      $nsql = "SELECT * FROM newanime WHERE name LIKE '%".$nsearch."%'";  
      $nresult = mysqli_query($conn, $nsql);  
      $noutput = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($nresult)> 0)  {  
           while($nrow = mysqli_fetch_assoc($nresult))  {  
                $noutput .= '<li><a href="newaniabout.php?nid='.$nrow["id"].'" target="_blank">
                <img width="80px" height="70px" src="admin/newanimes/images/'.$nrow['images'].'">

                '.$nrow["name"].'</a></li>';  
           }  
      }
      else{  
           $noutput .= '<li>Not Data Found</li>';  
      }  
      $noutput .= '</ul>';  
      echo $noutput;  
  }


  /*/////////////////////////////////////////////////////////////////////*/

 if(isset($_POST['psearch'])){
     $output = '';  
      $psearch =$_POST['psearch'];
      $psql = "SELECT * FROM topanim WHERE name LIKE '%".$psearch."%'";  
      $presult = mysqli_query($conn, $psql);  
      $poutput = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($presult)> 0)  {  
           while($prow = mysqli_fetch_assoc($presult))  {  
                $poutput .= '<li><a href="panimeabout.php?pid='.$prow["id"].'" target="_blank">
                <img width="80px" height="70px" src="admin/popularanime/images/'.$prow['images'].'">

                '.$prow["name"].'</a></li>';  
           }  
      }else  
      {  
           $poutput .= '<li>Not Data Found</li>';  
      }  
      $poutput .= '</ul>';  
      echo $poutput;  
  }

 ?> 