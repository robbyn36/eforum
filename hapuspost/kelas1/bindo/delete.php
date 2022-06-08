<?php
include 'koneksi.php';
$d = $_GET['d'];
$hasil = mysql_query("delete from tabel_topik_bindo1 where id_topik='$d'");
if($hasil){
header('location: indexindo2.php');
}
?>