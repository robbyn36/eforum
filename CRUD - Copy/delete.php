<?php
include 'koneksi.php';
$d = $_GET['d'];
$hasil = mysql_query("delete from admin where id_admin='$d'");
if($hasil){
header('location: view.php');
}
?>