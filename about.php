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
		
		<div class="jumbotron">
			<h1>tankC</h1>
			<p>India's emerging e-sports team</p>
		</div>
		
		<section class="my-5">
			<div class "py-5">
				<h1 class="text-center"> Who are we?<br><br></h1>
			</div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-12">
						<img src="images/Logo.jpg" width="500px" height="500px">
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<h3>We are tankC</h3>
							<p class="py-4"> 
								This is our website connected with all the gaming content that we provide over various 
								streaming platforms. Currently we're active on three platforms Youtube, Facebook studio, and 
								Twitch. Now coming to the point who we are, we're college students who love to play gaming 
								and create entertaining videos through those clips. Currently we are just a group of three
								gamer friends who love to play online video games together in the evening time as a relief
								window from daily college hustles. Currently we're just here to grow our gaming community but 
								for future plans we are thinking to go for a gaming facility. Till then GG 
							</p>
					</div>
				</div>
			</div>
	</section>
	
	</body>
</html>
	