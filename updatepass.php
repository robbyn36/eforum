<?php
$password		= $_POST['password'];
$username		= $_POST['username'];
include("config.php");

if (empty($password) || empty($username))
	{
		header("location:gantipass.php?status=Maaf, Anda belum memasukan password baru Anda.");
	}
else{

$query = mysql_fetch_array(mysql_query("SELECT password FROM tabel_member WHERE username='$username'"));
if($password == $query['password']){
		header("location:gantipass.php?status=Maaf, password baru tidak boleh sama dengan password Anda saat ini.");
	}
else {

$sql = "UPDATE tabel_member SET password='$password' where username='$username'";
$hasil = mysql_query($sql, $koneksi);

if($hasil){
	echo "<script>alert('Selamat. . . !! Update password berhasil.'); location = 'gantipass.php' </script>";
	
	}
else {
	echo "Thread gagal disimpan <br>";
	}
}
}
 ?>
