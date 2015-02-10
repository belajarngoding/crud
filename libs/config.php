<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$name = 'belajarngoding';

mysql_connect($host, $user, $pass) or die('Error<br>Gagal melakukan koneksi ke database server.');

mysql_select_db($name) or die ('Error<br>Database '.$name.' tidak ditemukan.');

$message = '';
?>