<?php
$id_topik		= $_POST['id_topik'];
$topik			= $_POST['topik'];
$penjawab		= $_POST['penjawab'];
$isi	 		= $_POST['isi'];

$tanggal		= date("Y-m-d H:i:s");

include "../../config.php";

if (empty($isi))
	{
		header("location:balas.php?id_topik=$id_topik&status=Maaf, field komentar tidak boleh kosong");
	}
else{
$sql = "INSERT INTO tabel_komentar_olahraga2 (id_topik, topik, penjawab,  isi, tanggal) VALUES ('$id_topik', '$topik', '$penjawab', '$isi', '$tanggal')";
$hasil = mysql_query($sql, $koneksi);


if($hasil){
	echo "
	<script> location = 'viewolahraga1.php?id_topik=$id_topik'; </script>
	";
	
	}
else {
	echo "komentar gagal disimpan <br>";
	}	
	
$query_balasan = mysql_query("SELECT id_topik_olahraga2 FROM tabel_komentar_olahraga2 WHERE id_topik='$id_topik'");
$total_balas = mysql_num_rows($query_balasan);
$total_balasan = $total_balas;

//memasukan total balasan ke database


$sql2 = "UPDATE tabel_topik_olahraga2 SET total_balasan='$total_balasan' WHERE id_topik='$id_topik'";
$hasil2 = mysql_query($sql2, $koneksi);

if($hasil2){
	echo "ok";
	}
else {
	echo "komentar gagal disimpan <br>";
	}	

}
 ?>
