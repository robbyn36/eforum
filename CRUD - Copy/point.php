<?php
include 'koneksi.php';
$d = $_GET['e'];
$hasil = mysql_query("insert into admin (point) VALUES('1') where id_admin='$d'");
if($hasil){
header('location: view.php');
}
?>