<?php
include 'koneksi.php';
$d = $_GET['d'];
$hasil = mysql_query("delete from tabel_topik_mtk2 where id_topik='$d'");
if($hasil){
header('location: indexmtk2.php');
}
?>