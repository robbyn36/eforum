<?php
include 'koneksi.php';
$e = $_GET['e'];
$hasil = mysql_query("UPDATE admin SET point = point + 1 where id_admin='$e'");
if($hasil){
header('location: view.php');
}
?>
