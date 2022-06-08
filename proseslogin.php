<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include("config.php");

if (empty($username) || empty($password))
	{
		header("location:login.php?status=Maaf, semua field harus diisi");
	}
else{
// query untuk mendapatkan record dari username
$query = "SELECT * FROM tabel_member WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['username'] = $data['username'];
	$_SESSION['level'] = $data['level'];
	$_SESSION['kelas'] = $data['kelas'];
	$_SESSION['tipe'] = $data['tipe'];

    header('location: index/index.php');
}
else 
{
	
	header("location:login.php?status=Maaf, username dan password tidak valid");
	exit();
	}
}
  ?>
  