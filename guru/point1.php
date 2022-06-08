<?php
include 'koneksi.php';
$e = $_GET['e'];
$hasil = mysql_query("UPDATE tabel_member SET point = point + 1 where username='$e'");
if($hasil){
echo "<script>window.history.back();</script>";
}
?>
