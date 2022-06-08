<?php
$host="localhost"; // nama host
$username="root"; // nama user
$password=""; // password host
$db="db_eforumv2"; // nama database yang dibuat
$query=mysql_connect($host,$username,$password) or die ("koneksi gagal");
mysql_select_db($db,$query);
?>