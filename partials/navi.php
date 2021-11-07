<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Project/HomePage.php">tankC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link" href="/Project/HomePage.php">Home</a>
			</li>';
			echo '
			 <li class="nav-item">
				<a class="nav-link" href="/Project/game.php">Games</a>
			 </li>
			 <li class="nav-item">
				<a class="nav-link" href="/Project/gallery.php">Gaallery</a>
			 </li>
			<li class="nav-item">
				<a class="nav-link" href="/Project/about.php">About Us</a>
			 </li>
       
		</ul>
	 </div> 
	<form class="d-flex">
        <div class="collapse navbar-collapse" id="navbarSupportedContent"  align ="right">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
				
				if(!$loggedin){
				echo '<li class="nav-item">
					<a class="nav-link" href="/Project/login.php">Login</a>
				 </li>
				 <li class="nav-item">
					<a class="nav-link" href="/Project/signup.php"><u>Signup</u></a>
				 </li>';
				}
				if($loggedin){
				echo '<li class="nav-item">
					<a class="nav-link" href="/Project/logout.php">Logout</a>
				 </li>';
				}
				echo '
			</ul>
		</div>  
    </form>
  </div>
</nav>';
?>
