<?php
include 'koneksi.php';
$d = $_GET['d'];
$hasil = mysql_query("delete from tabel_topik_ipa3  where id_topik='$d'");
if($hasil){
header('location: indexipa2.php');
}
?>