<?php 
require 'function.php';

if( isset($_POST["Tambah"])) { //mengecek tombol tambah sudah di klik atau belum
	if( Tambah($_POST) > 0) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
	}else{
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'tambah.php';
			</script>";
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
		         <a href="admin.php">
					<button class="btn btn-primary" type="submit">Home</button>
				</a>
		        </li>
		      </ul>
		
		    </div>
		  </div>
		</nav> 

		<div class="container-xxl bd-gutter mt-3 my-md-4 bd-layout">

		<div class="container">

			<h1 align="center">Tambah Data Alat Teknologi</h1>
			<hr>


				<form method="post" action="" enctype="multipart/form-data">
				  <div class="mb-3 row">
				    <label for="nama" class="col-sm-2 col-form-label">Nama </label>
				    <div class="col-sm-10">
				      <input type="text" name="nama" id="nama" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="jenis_teknologi" class="col-sm-2 col-form-label">Jenis Teknologi </label>
				    <div class="col-sm-10">
				      <input type="text" name="jenis_teknologi" id="jenis_teknologi" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="awal_ditemukan" class="col-sm-2 col-form-label">Awal ditemukan </label>
				    <div class="col-sm-10">
				      <input type="text" name="awal_ditemukan" id="awal_ditemukan" class="form-control">
				    </div>
				  </div>

				   <div class="mb-3 row">
				    <label for="penemu" class="col-sm-2 col-form-label">Penemu </label>
				    <div class="col-sm-10">
				      <input type="text" name="penemu" id="penemu" class="form-control">
				    </div>
				  </div>

				   <div class="mb-3 row">
				    <label for="manfaat" class="col-sm-2 col-form-label">Manfaat </label>
				    <div class="col-sm-10">
				      <input type="text" name="manfaat" id="manfaat" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="sejarah_singkat" class="col-sm-2 col-form-label">Sejarah Singkat </label>
				    <div class="col-sm-10">
				      <textarea type="text" name="sejarah_singkat" id="sejarah_singkat" class="form-control" rows="3"></textarea>
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="img" class="col-sm-2 col-form-label">Gambar</label>
				    <div class="col-sm-10">
				      <input type="file" name="img" id="img" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="img" class="col-sm-2 col-form-label"> </label>
				    <div class="col-sm-10">
				     <button type="submit" name="Tambah" class="btn btn-primary" value="Tambah">Tambah</button>
				    </div>
				  </div>
				</form>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	</body>
</html> 