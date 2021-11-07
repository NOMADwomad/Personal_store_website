<?php

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
	$email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
	
	
	$existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "Username Already Exists";
    }
    else{
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
<?php include 'partials/navi.php' ?>

<?php
	if($showAlert){
		echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success!</strong> You are logged in
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
		}
	if($showError){
		echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Error!</strong> '. $showError.'
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
		}
?>

    <div class="container" align=center >
     <h1 class="text-center"><br>Register on the website<br><br></h1>
	 
     <form action="/Project/signup.php" method="post">
		
		<div class="form-group col-md-5" align=left>
			<label for="email">Email address</label>
			<input type="emai" class="form-control" id="email" maxlength="30" name="email" >
		</div>
        <div class="form-group col-md-5" align=left>
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" maxlength="15" name="username" >   
        </div>
        <div class="form-group col-md-5" align=left>
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" maxlength="16" name="password">
        </div>
        <div class="form-group col-md-5" align=left>
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword"
			placeholder="Make sure to type the same password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary  col-md-2">Register</button>
     </form>
	 <div class="form-group col-md-5" align=left><a href="/Project/login.php">I have an account</a></div>
    </div>

    <!-- Optional -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
