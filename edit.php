<?php
require_once('libs/config.php');

$id = $_GET['id'];

if($_POST){

	$nama = $_POST['nama'];			// menyimpan post variabel nama ke variabel nama
	$telepon = $_POST['telepon'];	// menyimpan post variabel telepon ke variabel telepon

	if(empty($nama) || empty($telepon)){ 			// pengecekan apakah semua field diisi
		$message = 'Semua field harus diisi!<br>';	// tampilkan error jika ada yang kosong
	}

	$sql = "UPDATE phonebook set nama = '$nama', telepon = '$telepon' WHERE id ='$id'";
	$query = mysql_query($sql) or die(mysql_error());
	$message = 'Data berhasil diupdate<br>';

}

$sql = "SELECT * FROM phonebook WHERE id = '$id'";
$query = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_row($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php echo $message;?>
<a href="index.php">Kembali</a>
<form action="edit.php?id=<?php echo $id;?>" method="post">
	<p>
		Nama<br>
		<input type="text" name="nama" value="<?php echo $row[1];?>">
	</p>
	<p>
		Telepon<br>
		<input type="text" name="telepon" value="<?php echo $row[2];?>">
	</p>
	<p>
		<input type="submit">
	</p>
</form>

</body>
</html>
