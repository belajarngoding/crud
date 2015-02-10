<?php
require_once('libs/config.php');

$sql = "select * from phonebook";
$query = mysql_query($sql) or die(mysql_error());

?>

<!DOCTYPE html>
<html>
<head>
	<title>List Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="add.php">Tambah</a>
<table>
	<thead>
		<tr>
			<td width="50">No</td>
			<td width="350">Nama</td>
			<td width="150">Telepon</td>
			<td width="100">Action</td>
		</tr>
	</thead>
	<tbody>
<?php
while($row = mysql_fetch_object($query)){
?>
		<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->nama;?></td>
			<td><?php echo $row->telepon;?></td>
			<td align="right">
				<a href="edit.php?id=<?php echo $row->id;?>">Edit</a> | <a href="delete.php?id=<?php echo $row->id;?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
			</td>
		</tr>
<?php
}
?>
	</tbody>
</table>
</body>
</html>