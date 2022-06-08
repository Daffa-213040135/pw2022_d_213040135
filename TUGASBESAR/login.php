<?php
session_start();

if(isset ($_SESSION["username"])) {
	header("Location: admin.php");
}
if(isset($_COOKIE["username"]) && (isset($_COOKIE["password"]))) {
	if($_COOKIE["username"] == "admin" && $_COOKIE["password"] == "123") {
		$_SESSION["username"] = $_COOKIE["username"];
		setcookie("username", $_POST["username"], time() + (3600));
		setcookie("password", $_POST["password"], time() + (3600));
		header("Location: admin.php");
		die;
	}
}
if (isset($_POST["submit"])) {
	if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
		$_SESSION["username"] = $_POST["username"];
		if(isset ($_POST["remember"])) {
			setcookie("username", $_POST["username"], time() + (3600));
			setcookie("password", $_POST["password"], time() + (3600));
		}
		header("Location: admin.php");
		die;
	} else {
		$error = true;
	}
}
?>

<!DOCTYPE html>

<html> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PW - 213040135</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
</head>
<body>

		<nav class="navbar navbar-expand-lg bg-light">
		  <div class="container-xxl bd-gutter mt-3 my-md-4 bd-layot">

		  <span class="navbar-brand mb-0 h1">Teknologi - 213040135</span>

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          
		        </li>
		        <li class="nav-item">
		         
		        </li>
		        <li class="nav-item dropdown">
		         <a href="index.php">
					<button class="btn btn-primary" type="submit">Home</button>
				</a>
		        </li>
		      </ul>

		    </div>
		  </div>
		</nav> 

		<div class="container-xxl bd-gutter mt-3 my-md-4 bd-layout">

		<div class="container">

				<div class="card text-center">
				  <div class="card-header">
				   Silahkan Login
				  </div>

				  <br> 
				  <br> 

				  <div class="card-body">
				  <div class="container">

				  	<form action="" method="post">
						  <div class="row">

						    <div class="col">
						      
						    </div>

						    <div class="col">
						      <div class="mb-3 row" action="" method="post">
							    <label for="username" class="col-sm-3 col-form-label">Username</label>
							    <div class="col-sm-9">
							      <input type="text" name="username" id="username" autofocus autocomplete="off" class="form-control" placeholder="Masukkan Username">
							    </div>
							    	<br> 
							    	<br> 
							     <label for="password" class="col-sm-3 col-form-label">Password</label>
							    <div class="col-sm-9">
							      <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
							    </div>
  							</div>
						    </div>

						    <div class="col">
						      
						    </div>

						  </div>
						</div>

						<div class="d-grid gap-2 col-3 mx-auto">
								<button type="submit" name="submit" class="btn btn-primary" type="button">Login</button>						 
						</div>
				  </div>
				</form>
				  <?php
					if (isset($error)) { ?>
					<p style="text-align: center; color: red;">Maaf username/password Anda salah</p>
				<?php } ?>

					<br> 
					<br> 

				  <div class="card-footer text-muted">
				    Selamat Datang.
				  </div>
				</div>

		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html> 
