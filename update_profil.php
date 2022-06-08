<?php
	$nama_lengkap 	= $_POST['nama_lengkap'];
	$username 		= $_POST['username'];
	$avatar			= $_POST['avatar'];
	$email			= $_POST['email'];

$tanggal_daftar	= date("Y/m/d");

include("config.php");

//Seleksi field2 yang kosong
if (empty($nama_lengkap) || empty($username) || empty($avatar)|| empty($email))
	{
		echo "<script> location = 'edit_profil.php?username=$username&status=Maaf, field tidak boleh kosong' </script>";
	}


$sql = "UPDATE tabel_member SET nama_lengkap='$nama_lengkap', username='$username',email='$email', avatar='$avatar' WHERE username='$username' ";

$hasil = mysql_query($sql, $koneksi);

if($hasil){
echo "<script> alert('Selamat. Profil Anda berhasil di perbaharui'); location = 'profil.php?username=$username'; </script>";
}
else {
	echo "Data gagal disimpan <br>";
	}	


 ?>
