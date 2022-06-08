<?php
$pengirim		= $_POST['username'];
$topik			= $_POST['topik'];
$isi	 		= $_POST['isi'];

$tanggal		= date("Y-m-d H:i:s");

include "../../config.php";


if (empty($isi) || empty($topik))
	{
		header("location:create.php?status=Maaf, semua field harus di isi.");
	}
else{

$sql = "INSERT INTO tabel_topik_ips1 (pengirim, topik, isi, tanggal) VALUES ('$pengirim', '$topik', '$isi', '$tanggal')";

$hasil = mysql_query($sql, $koneksi);

if($hasil){
	header ("location:index2ips.php");
	}
else {
	echo "Thread gagal disimpan <br>";
	}	
}

?>
