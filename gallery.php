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
				<h2 class="text-center"> Sweet Moments <br><br><br></h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/creed.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/GTA 5 Heist.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/pubg0.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/valo.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/warzone.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/Valorant shotgun sage.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/GTA 5 robbery.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/pubg.jpg" class="img-fluid pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/tomClancy.jpg" class="img-fluid pb-3">
					</div>
				</div>
			</div>
		</section>
		
		<section>
			<p class="p-3 bg-dark text-white text-center">Thankyou @FarhanaDesai ma'am</p>
		</section>
	
	</body>
</html>