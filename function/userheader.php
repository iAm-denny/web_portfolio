	
	<div id="nav">
		
		<ul class="nav-bar">
			<li><a href="userindex.php">  Home	   </a></li>
			<li><a href="newanime.php">New Anime  </a></li>
			<li><a href="panime.php">Popular&nbspAnime</a></li>
		</ul>
	
		<ul class="login-form">

			<li><a href="user_profile/index.php"><i class="fas fa-user-alt"></i>&nbsp<?php echo $_SESSION['$name']?></a></li>
			<li><a href="function/logout.php?logout">Sign Out</a></li>
		</ul>
	</div>
	<span class="bar"><i class="fas fa-bars"></i></span>
	<span class="bar-times"><i class="fas fa-times"></i></span>
	<span class="logo"><a href="userindex.php">DenANime</a></span>