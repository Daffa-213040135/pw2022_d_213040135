<?php 


	if(!isset($_GET["id"])) {
		header("Location: index.php");
		die;
	}
	require 'function.php';
	$id = $_GET["id"];

	$teknologi = query("SELECT * FROM teknologi WHERE id = $id")[0];

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

			<h1 align="center"> Detail Alat Teknologi</h1>

			<div class="card mb-3" style="max-width: 1400px;">
		  <div class="row g-0">
		    <div class="col-md-4">
		      <img src="img/<?php echo $teknologi["img"] ?>" class="img-fluid rounded-start" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">

		        <h5 class="card-title"><?php echo $teknologi["nama"]; ?></h5>
		        <span class="nama">Nama : <small class="badge bg-secondary"><?php echo $teknologi["nama"]; ?></small></span>
		        <br> 
		        <span class="jenis_teknologi">Jenis Teknologi : <small class="badge bg-secondary"><?php echo $teknologi["jenis_teknologi"] ?></small></span>
		        <br> 
		        <span class="awal_ditemukan">Awal ditemukan : <small class="badge bg-secondary"><?php echo $teknologi["awal_ditemukan"] ?></small></span>
		        <br> 
		        <span class="penemu">Penemu : <small class="badge bg-secondary"><?php echo $teknologi["penemu"] ?></small></span>
		        <br> 
		        <span class="manfaat">Manfaat : <small class="badge bg-secondary"><?php echo $teknologi["manfaat"] ?></small></span>
		        <br> 
		        <hr> 
		        <h5 class="card-title">Sejarah Singkat</h5>
		       	<p class="card-text"><?php echo $teknologi["sejarah_singkat"] ?></p>
		      </div>
		    </div>
		  </div>
		</div>
		</div>
</body>
</html>