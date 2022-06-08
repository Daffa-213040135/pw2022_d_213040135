<?php 
require 'function.php';

$id = $_GET["id"];
$row = query("SELECT * FROM teknologi WHERE id = $id")[0];

if( isset($_POST["Ubah"])) { //mengecek tombol ubah sudah di klik atau belum
	if( ubah($_POST) >= 0) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
	}else{
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'ubah.php';
			</script>";
	}
}

?>


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

			<h1 align="center">Ubah Data Alat Teknologi</h1>
			<hr>

			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" id="id" value = "<?php echo $row["ID"]; ?>">
				<input type="hidden" name="gambar_lama" value="<?php echo $row['img'] ?>">

				  <div class="mb-3 row">
				    <label for="nama" class="col-sm-2 col-form-label">Nama </label>
				    <div class="col-sm-10">
				      <input type="text" name="nama" id="nama" value = "<?php echo $row["nama"]; ?>" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="jenis_teknologi" class="col-sm-2 col-form-label">Jenis Teknologi </label>
				    <div class="col-sm-10">
				      <input type="text" name="jenis_teknologi" id="jenis_teknologi" value = "<?php echo $row["jenis_teknologi"]; ?>" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="awal_ditemukan" class="col-sm-2 col-form-label">Awal ditemukan </label>
				    <div class="col-sm-10">
				      <input type="text" name="awal_ditemukan" id="awal_ditemukan" value = "<?php echo $row["awal_ditemukan"]; ?>" class="form-control">
				    </div>
				  </div>

				   <div class="mb-3 row">
				    <label for="penemu" class="col-sm-2 col-form-label">Penemu </label>
				    <div class="col-sm-10">
				      <input type="text" name="penemu" id="penemu" value = "<?php echo $row["penemu"]; ?>" class="form-control">
				    </div>
				  </div>

				   <div class="mb-3 row">
				    <label for="manfaat" class="col-sm-2 col-form-label">Manfaat </label>
				    <div class="col-sm-10">
				      <input type="text" name="manfaat" id="manfaat" value = "<?php echo $row["manfaat"]; ?>" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="sejarah_singkat" class="col-sm-2 col-form-label">Sejarah Singkat </label>
				    <div class="col-sm-10">
				      <textarea type="text" name="sejarah_singkat" id="sejarah_singkat" class="form-control" rows="3"><?php echo $row["sejarah_singkat"]; ?></textarea>
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="img" class="col-sm-2 col-form-label">Gambar</label>
				    <div class="col-sm-10">
				      <input type="file" name="img" id="img" value = "<?php echo $row["img"]; ?>" class="form-control">
				    </div>
				  </div>

				  <div class="mb-3 row">
				    <label for="img" class="col-sm-2 col-form-label"> </label>
				    <div class="col-sm-10">
				     <button type="submit" name="Ubah" class="btn btn-primary">Simpan</button>
				    </div>
				  </div>
				 </form>
</div>
</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	</body>
</html> 

