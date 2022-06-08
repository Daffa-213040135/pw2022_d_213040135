<?php
		$conn = mysqli_connect("localhost", "root", "", "pw213040135");

	function query($sql) {
		global $conn;
		$result = mysqli_query($conn, $sql);

		$rows = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
	return $rows;
	}

	function hapus($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM teknologi where id = $id");

		return mysqli_affected_rows($conn);
	}

	function tambah($data) {
		global $conn;

		$Nama = htmlspecialchars($data["nama"]);
		$Jenis = htmlspecialchars($data["jenis_teknologi"]);
		$AwalDitemukan = htmlspecialchars($data["awal_ditemukan"]);
		$Penemu = htmlspecialchars($data["penemu"]);
		$Manfaat = htmlspecialchars($data["manfaat"]);
		$Sejarah = htmlspecialchars($data["sejarah_singkat"]);
		$Image = ($_FILES['img']['name']);

		//jika tidak ada gambar
		if ($_FILES['img']['error'] == 4) {
			echo "<script>
				alert('Harap Masukkan img');
				document.location.href = '';
			</script>";
			return false;
		}

		if (!cek_gambar()) {
			return false;
		}

		//buat nama file baru
		$format = explode('.', $_FILES['img']['name']);
		$format = strtolower(end($format));
		$nama_file_baru = uniqid() . '.' . $format;
		$Image = $nama_file_baru;

		move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $Image);
		$query = "INSERT INTO teknologi
				VALUES
				('', '$Nama', '$Jenis', '$AwalDitemukan', '$Penemu', '$Manfaat', '$Sejarah', '$Image')";
		mysqli_query($conn, $query);



		return mysqli_affected_rows($conn);
	}

	function cek_gambar() {

		//ambil data gambar//
		$Image= $_FILES["img"]["name"];
		$ukuran = $_FILES["img"]["size"];
		$tipe = $_FILES["img"]["type"];
		$error = $_FILES["img"]["error"];

		//pengecekan gambar

		//batas ukuran file
		if ($ukuran > 5000000) {
			echo "<script>
				alert('Image yang dimasukkan terlalu besar. Maksimal 5MB.);
				document.location.href = '';
			</script>";

		}

		//jika bukan gambar
		$allowed = ["jpg", "gif", "png", "jpeg"];
		$format = explode('.', $Image);
		//paling buntut
		$format = strtolower(end($format));

		//gambar lain?
		if (! in_array($format, $allowed)) {
			echo "<script>
				alert('Ekstensi image tidak sesuai.');
				document.location.href = '';
			</script>";
			return false;
		}

		return true;
	}

	function ubah($data) {
		global $conn;

		$id = $_GET["id"];
		$Nama = htmlspecialchars($data["nama"]);
		$Jenis = htmlspecialchars($data["jenis_teknologi"]);
		$AwalDitemukan = htmlspecialchars($data["awal_ditemukan"]);
		$Penemu = htmlspecialchars($data["penemu"]);
		$Manfaat = htmlspecialchars($data["manfaat"]);
		$Sejarah = htmlspecialchars($data["sejarah_singkat"]);
		$Image = htmlspecialchars($_FILES['img']['name']);

		//cek apakah user upload gambar baru?
		if ($_FILES['img']['error'] === 0) {
			//cek gambar
			if (!cek_gambar()) {
				return false;
			}
			//upload gambar baru
			$format = explode('.', $_FILES['img']['name']);
			$format = strtolower(end($format));
			$nama_file_baru = uniqid() . '.' . $format;
			$Image = $nama_file_baru;

		move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $Image);
		}

		$query = "UPDATE teknologi SET nama = '$Nama', jenis_teknologi = '$Jenis', awal_ditemukan = '$AwalDitemukan', penemu = '$Penemu', manfaat = '$Manfaat', sejarah_singkat = '$Sejarah', img = '$Image' WHERE id = '$id'";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

 ?>