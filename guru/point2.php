<?php
include 'koneksi.php';
$e = $_GET['e'];
$hasil = mysql_query("UPDATE tabel_member SET point = point + 1 where id_member='$e'");
if($hasil){
header('location: http://127.0.0.1/forum/S2V2/guru/kelas2.php');
}
?>
