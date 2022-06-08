<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ujiadmin';
mysql_connect($server, $username, $password)or die("Gagal Koneksi");
mysql_select_db($database)or die("Tidak ada database");
?>