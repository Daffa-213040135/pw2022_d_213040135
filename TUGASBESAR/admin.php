<?php

session_start();
if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	die;
}

require 'function.php';

$teknologi = query("SELECT * FROM teknologi");

if (isset($_GET['cari'])) {
		$keyword = $_GET["keyword"];
		$sql = "SELECT * FROM teknologi WHERE nama LIKE '%$keyword%'" ;
		$teknologi = query($sql);
	} else {
		$teknologi = query("SELECT * FROM teknologi");

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

		  <span class="navbar-brand mb-0 h1">(Admin) Teknologi - 213040135</span>

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          
		        </li>
		        <li class="nav-item">
		         
		        </li>
		        <li class="nav-item dropdown">
		         <a href="logout.php">
					<button class="btn btn-primary" type="submit">Logout</button>
				</a>

				<a href="tambah.php">
					<button class="btn btn-primary" type="submit">Tambah</button>
				</a>

				<a href="admin.php">
					<button class="btn btn-primary" type="submit">Home</button>
				</a>

		        </li>
		      </ul>
		      <form action="" method="get" class="d-flex" role="search">
		        <input type="search" name="keyword" placeholder="Masukkan keyword pencarian" size="40" autocomplete="off" id="keyword" class="form-control me-2">
		        <button name="cari" type="submit" id="cari" class="btn btn-primary">Cari</button>
		      </form>

		      	

		    </div>
		  </div>
		</nav> 

		<div class="container-xxl bd-gutter mt-3 my-md-4 bd-layout">
		<div class="container">

			<h1 align="center"> Contoh Alat-Alat Teknologi </h1>
			<hr>

			<?php for ($i=1; $i <= 1 ; $i++){ ?>

	  				<div class="row">

	  					<?php foreach ($teknologi as $row) { ?>
	  	
	    		<div class="col-4">

				<div class="card" style="width: 18rem; height: 20rem;">
  								<img class="card-img-top" src=img/<?php echo $row["img"] ?> width="100px" height="150px">
  								<br>
  								<div class="card-body">

  						
								<h5 class="card-title">
									<?php echo $row["nama"] ?>
								</h5>
								<hr>
								<a href="ubah.php?id=<?php echo $row["ID"] ?>" class="btn btn-success">Edit</a>
								<a href="hapus.php?id=<?php echo $row["ID"]; ?>" onclick=" return confirm('Anda yakin ingin menghapus <?php echo $row["nama"] ?> ?')" class="btn btn-danger">Hapus</a>
	   							
						
					</div>

				</div>
    								<br>
 		 </div>
 		 				<?php }  ?>

 		 <?php } ?>

		</div>
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html> 