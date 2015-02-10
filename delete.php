<?php
require_once('libs/config.php');

$id = $_GET['id'];

$sql = "DELETE FROM phonebook WHERE id='$id'";
$query = mysql_query($sql) or die(mysql_error());

header('Location: index.php');
?>