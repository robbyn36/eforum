<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'db_eforumv2';
mysql_connect($server, $username, $password)or die("Gagal Koneksi");
mysql_select_db($database)or die("Tidak ada database");
?>