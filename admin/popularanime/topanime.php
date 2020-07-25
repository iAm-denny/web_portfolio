<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Popular Anime</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/manrope.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap4/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-2" id="nav_bar">
        <h3 class="mt-3">Welcome</h3>
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../animes/animes.php">Animes</a></li>
            <li><a href="../newanimes/newanimes.php">New Animes</a></li>
            <li><a href="../popularanime/topanime.php">Popular Animes</a></li>
          </ul>
      </div>

    <div class="mt-3 col-lg-10">
  <h3>Popular Animes</h3>
  <?php 
      if(isset($_GET['success'])){
         echo "<div class='success mb-3' align='center'>".$_GET['success']."</div> ";
         }
       if(isset($_GET['error'])){
    echo "<div class='error' align='center'>".$_GET['error']."</div>";
      }
     ?>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   <i class="fas fa-plus"></i>

  </button>

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">

          <h4 class="modal-title">Add New Anime</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
          <form action="data.php" method="post" enctype= "multipart/form-data">

            <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>

            <input type="file" name="img" class="form-control mb-3" required>
            <input type="text" name="type" class="form-control mb-3" placeholder="Type" required>
            <input type="text" name="episode" class="form-control mb-3" placeholder="Episode" required>
            <input type="text" name="re_data" class="form-control mb-3" placeholder="Released Date" required>
            <input type="text" name="end" class="form-control mb-3" placeholder="End In" required>
            <input type="text" name="rate" class="form-control mb-3" placeholder="Rating" required>
            <textarea class="form-control" placeholder="Review" name="review" rows="8"></textarea>

              <div class="modal-footer">
               <input type="submit" class="btn btn-success mr-auto" value="Add" name="add">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
   
          </form>
        </div>

      
        
      </div>
    </div>
  </div>
    
     <div class="container d-flex mt-3 pt-3">
        <div><input type="text" name="" class="search_btn"></div>
        <div class="search_txt">Search</div>
    </div>
   <div class="container-fluid panimelist mt-5">
    
  </div>


</div>
</div></div>



<script type="text/javascript" src="../../bootstrap4/jquery-min.js"></script>
<script type="text/javascript" src="../../bootstrap4/pooper-min.js"></script>
<script type="text/javascript" src="../../bootstrap4/bootstrap-min.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1-min.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
</body>
</html>
