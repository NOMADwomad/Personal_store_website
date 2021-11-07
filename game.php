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
		
		<section class="my-5">
		<div class "py-5">
			<h2 class="text-center"> Games that we are into <br><br><br></h2>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/gta.jpg" alt="GTA 5 image">
						  <div class="card-body">
								<h4 class="card-title">GTA 5</h4>
								<p class="card-text">Watch us play this game live on 
									youtube with friends and lucky subscribers 
								</p>
								<a href="https://www.youtube.com/channel/UCvnOoVkGLJioINjCLlmr_ww" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/Valorant.jpg" alt="Valorant image">
						  <div class="card-body">
								<h4 class="card-title">Valorant</h4>
								<p class="card-text">Watch us play this game live on 
									youtube with friends and lucky subscribers</p>
								<a href="https://www.youtube.com/channel/UCvnOoVkGLJioINjCLlmr_ww" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/pubg.jpg" alt="Twitch image">
						  <div class="card-body">
								<h4 class="card-title">PUBG</h4>
								<p class="card-text">Watch us play this game live on 
									youtube with friends and lucky subscribers</p>
								<a href="https://www.youtube.com/channel/UCvnOoVkGLJioINjCLlmr_ww" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/warzone.jpg" alt="CoD WARZONE image">
						  <div class="card-body">
								<h4 class="card-title">CoD WARZONE</h4>
								<p class="card-text">Watch us play this game live on 
									youtube with friends and lucky subscribers</p>
								<a href="https://www.youtube.com/channel/UCvnOoVkGLJioINjCLlmr_ww" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/tomClancy.jpg" alt="Tom Clancy's image">
						  <div class="card-body">
								<h4 class="card-title">Tom Clancy's Ghost Recon</h4>
								<p class="card-text">Watch us play this game live on 
									youtube with friends and lucky subscribers</p>
								<a href="https://www.youtube.com/channel/UCvnOoVkGLJioINjCLlmr_ww" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
				<img class="card-img-top" src="images/creed.jpg" alt="AoC Valhalla image">
						  <div class="card-body">
								<h4 class="card-title">Assassin's Creed Valhalla</h4>
								<p class="card-text">Watch us play this game live on 
									youtube with friends and lucky subscribers</p>
								<a href="https://www.youtube.com/channel/UCvnOoVkGLJioINjCLlmr_ww" class="btn btn-primary">Visit channel</a>
						  </div>
					</div>
				</div>
				
			</div>	
		</div>
		
	</section>
	</body>
</html>