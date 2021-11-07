<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>


<html lang="en">
  <head>
	<title>tankC</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
	<?php include 'partials/navi.php' ?>

	<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="images/pubg.jpg" alt="PUBG lite" width="1920" height="1080">
		  <div class="carousel-caption">
			<h2>PUBG lite</h2>
			<p>We die alot here!</p>
		  </div>  
		</div>
		<div class="carousel-item">
		  <img src="images/gta.jpg" alt="GTA 5 Online" width="1920" height="1080">
		  <div class="carousel-caption">
			<h2>GTA 5</h2>
			<p>Enjoy your gangster side</p>
		  </div>   
		</div>
		<div class="carousel-item">
		  <img src="images/Valo.jpg" alt="Valorant" width="1920" height="1080">
		  <div class="carousel-caption">
			<h2>Valorant</h2>
			<p>We will reach to Radiant one day</p>
		  </div>   
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	  </a>
	</div>
	
	<section class="my-5">
		<div class "py-5">
			<h2 class="text-center"> About Us <br><br></h2>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-12">
					<img src="images/Logo.jpg" width="500px" height="500px">
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<h2>We are tankC</h2>
						<p class="py-4"> 
							This is our website connected with all the gaming content that we provide over various 
							streaming platforms. Currently we're active on three platforms Youtube, Facebook studio, and 
							Twitch. Now coming to the point who we are, we're college students who love to play gaming 
							and create entertaining videos through those clips. Currently we are just a group of three
							gamer friends who love to play online video games together in the evening time as a relief
							window from daily college hustles. Currently we're just here to grow our gaming community but 
							for future plans we are thinking to go for a gaming facility. Till then GG 
						</p>
					<a href="about.php">want to know more? </a>
				</div>
		</div>
	</section>
	
	
	<section class="my-5">
		<div class "py-5">
			<h2 class="text-center"> Streaming Platforms <br><br><br></h2>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/youtube.png" alt="Youtube image">
						  <div class="card-body">
								<h4 class="card-title">Youtube</h4>
								<p class="card-text">Visit our channel on youtube</p>
								<a href="https://www.youtube.com/channel/UCvnOoVkGLJioINjCLlmr_ww" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/facebook.png" alt="Facebook image">
						  <div class="card-body">
								<h4 class="card-title">Facebook</h4>
								<p class="card-text">Visit our Page on Facebook</p>
								<a href="https://business.facebook.com/creatorstudio/home" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/twitch.png" alt="Twitch image">
						<br><br><br><br><br><br><br><br><br>
						  <div class="card-body">
								<h4 class="card-title">Twitch</h4>
								<p class="card-text">Visit our Gaming channel on twitch</p>
								<a href="https://www.twitch.tv" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<section class="my-5">
		<div class "py-5">
			<h2 class="text-center"> Feedbacks <br><br><br></h2>
		</div>
		
		<div class="w-50 m-auto">
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Mobile no</label>
					<input type="number" name="mobile" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Comments</label>
					<textarea class="form-control" name="comment">
					</textarea>
				</div>
				<center><button type="submit" class="btn btn-primary w-50 m-auto">Submit</button></center>
			</form>
		</div>
	</section>
	
	<section>
		<p class="p-3 bg-dark text-white text-center">Thankyou @FarhanaDesai ma'am</p>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>