<?php 

session_start();
if (isset($_SESSION['username']))
{}
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
}
	include "config.php";
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$username'"));

//Mengambil nama informasi user
	$user=$_SESSION['username'];
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$user'"));
	$nama_lengkap 	= $query['nama_lengkap'];
	$namauser 		= $query['username'];
	$tanggal_daftar = $query['tanggal_daftar'];
	$jenis_kelamin  = $query['jenis_kelamin'];
	$avatar			= $query['avatar'];
	$email			=$query['email'];
	$kelas			= $query['kelas'];
	$point			=$query['point'];


?>
    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Css/header.css" rel="stylesheet" type="text/css" />
<link href="Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr th em {
	font-size: 14px;
}
</style>
</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="Menu/Forum_up.png" />
</div>
<div id="tulisan">
  <table width="631" height="355" border="1" align="center">
    <tr>
      <th height="64" scope="col"><h1>Profil</h1></th>
      <th height="64" colspan="2" scope="col"><em>Anda Login Sebagai :</em><?php echo $_SESSION['username']; ?></th>
    </tr>
    <tr>
      <th width="249" rowspan="6" scope="row"><p><img src="<?php echo $avatar ?>" alt="" width="150" height="150" /></p></th>
      <td width="102" height="33">Nama Lengkap </td>
      <td width="177">:<?php echo $nama_lengkap ?></td>
    </tr>
    <tr>
      <td height="29">Username</td>
      <td>:<?php echo $username ?></td>
    </tr>
    <tr>
      <td height="23">Terdaftar Sejak</td>
      <td>:<?php echo $tanggal_daftar ?></td>
    </tr>
    <tr>
      <td height="23">Jenis Kelamin</td>
      <td>:<?php echo $jenis_kelamin ?></td>
    </tr>
    <tr>
      <td height="23">E-Mail</td>
      <td>:<?php echo $email ?>&nbsp;</td>
    </tr>
    <tr>
      <td height="23">Kelas</td>
      <td>:<?php echo $kelas ?></td>
    </tr>
    <tr>
      <th height="23" scope="row"><div align="left">
        <?php 
			  
			  $username_asli = $_SESSION['username'];
			  if ($user == $username_asli){
              echo "<a href='edit_profil.php?username=$username_asli'><strong>&gt;&gt; Edit Profil &lt;&lt;</strong></a> ";
			  }
			  else {
				  echo "";
				  }
			  ?>
      </div></th>
      <th height="23" colspan="2" scope="row">Total Point :<?php echo $point ?></th>
    </tr>
    <tr>
      <th height="75" colspan="3" scope="row"><table width="339" height="112" border="1" align="right">
        <tr>
          <th width="102" height="106" scope="col"><div align="center">
            <p><a href="index/index.php"><img src="images/home.png" width="80" height="80" /></a><a href="http://127.0.0.1/forum/s2v2/index/index.php">Home</a></p>
          </div></th>
          <th width="111" scope="col"><div align="center">
            <p><a href="gantipass.php"><img src="images/changepass.jpg" width="80" height="80" />Ganti Password</a></p>
          </div></th>
          <th width="104" scope="col"><div align="center">
            <p><a href="logout.php"><img src="images/log_off.png" width="80" height="80" />Keluar</a></p>
          </div></th>
        </tr>
      </table></th>
    </tr>
  </table>
</div>
</body>
</html>