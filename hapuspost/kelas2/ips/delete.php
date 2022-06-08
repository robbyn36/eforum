<?php
include 'koneksi.php';
$d = $_GET['d'];
$hasil = mysql_query("delete from tabel_topik_ips2 where id_topik='$d'");
if($hasil){
header('location: indexips2.php');
}
?>