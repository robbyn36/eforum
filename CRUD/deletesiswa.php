<?php
include 'koneksi.php';
$d = $_GET['d'];
$hasil = mysql_query("delete from tabel_member where id_member='$d'");
if($hasil){
header('location: viewsiswa.php');
}
?>