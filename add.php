<?php
require_once('libs/config.php');

if($_POST){

	$nama = $_POST['nama'];			// menyimpan post variabel nama ke variabel nama
	$telepon = $_POST['telepon'];	// menyimpan post variabel telepon ke variabel telepon

	if(empty($nama) || empty($telepon)){ 			// pengecekan apakah semua field diisi
		$message = 'Semua field harus diisi!<br>';	// tampilkan error jika ada yang kosong
	}

	$sql = "INSERT INTO phonebook (nama, telepon)VALUES('$nama', '$telepon')";
	$query = mysql_query($sql) or die(mysql_error());
	$message = 'Data berhasil disimpan<br>';

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php echo $message;?>
<a href="index.php">Kembali</a>
<form action="add.php" method="post">
	<p>
		Nama<br>
		<input type="text" name="nama">
	</p>
	<p>
		Telepon<br>
		<input type="text" name="telepon">
	</p>
	<p>
		<input type="submit">
	</p>
</form>

</body>
</html>
