<?php
$nama_lengkap	= $_POST['nama_lengkap'];
$username		= $_POST['username'];
$password 		= $_POST['password'];
$email			= $_POST['email'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];
$avatar			= $_POST['avatar'];

$tanggal_daftar	= date("Y/m/d");

include("config.php");

//Seleksi field2 yang kosong
if (empty($nama_lengkap) || empty($username) || empty($password) || empty($email) || empty($jenis_kelamin))
	{
		header("location:adduser.php?status=Maaf, semua field harus di isi.");
	}
else{
//cek username yang sama
$query = mysql_fetch_array(mysql_query("SELECT username FROM tabel_member WHERE username='$username'"));

if($query){
	header("location:adduser.php?status=Maaf, Username telah digunakan");
	}
	
else{

$sql = "INSERT INTO tabel_member (nama_lengkap, username, password, email, jenis_kelamin, tanggal_daftar, avatar ) VALUES ('$nama_lengkap', '$username', '$password', '$email' ,'$jenis_kelamin', '$tanggal_daftar', '$avatar')";

$hasil = mysql_query($sql, $koneksi);

if($hasil){
echo "<script> alert('Tambah User Berhasil.'); location = 'http://127.0.0.1/forum/S2V2/crud/adduser.php'; </script>";
}
else {
	echo "Data gagal disimpan <br>";
	}	
}
}
 ?>
