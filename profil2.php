<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
	exit();
	}
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
}
	include "config.php";
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$username'"));
	$query2=mysql_fetch_array(mysql_query("select * from tabel_topik where pengirim='$username'"));

//Mengambil nama informasi user
	$user=$_GET['username'];
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$user'"));
	$nama_lengkap 	= $query['nama_lengkap'];
	$namauser 		= $query['username'];
	$tanggal_daftar = $query['tanggal_daftar'];
	$jenis_kelamin  = $query['jenis_kelamin'];
	$avatar			= $query['avatar'];
	$situs_web		= $query['situs_web'];


//mencari total view (dilihat)

$id_topik = $_GET['id_topik'];
$query6=mysql_fetch_array(mysql_query("select dilihat from tabel_topik_ipa1 where id_topik='$id_topik'"));
$dilihat = $query6 ['dilihat'] + 1;
$sql2 = "UPDATE tabel_topik SET dilihat='$dilihat' WHERE id_topik='$id_topik'";
$hasil2 = mysql_query($sql2, $koneksi);

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil</title>
<style type="text/css">
.putih {
	color: #FFF;
}

.tabel_thread{
	font-family:Verdana;
	font-size:2;
	}
.hijau {
	color: green;
}
a {
	text-decoration:none;
	font-weight:bold;
	color:#0000FF;
	}
.merah {	font-weight: bold;
	color: #F00;
}

.merah1 {	color: #F00;
}
</style>
</head>

<body bgcolor="#000000">

<div align="center">
  <p><font size="6" class="merah">- Forum cupU -</font></p>
  <table width="700" border="0" style="border: 2px solid gray; border-radius: 10px 10px 10px 10px; background:#fff;">
    <tr>
      <td height="29" bgcolor="#000000"> <div align="right"><strong class="hijau">Anda Login Sebagai : <?php  echo $_SESSION['username']; echo " &nbsp;"?> </strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">
        <div align="center">
          <table width="552" border="0">
            <tr>
              <td width="150" height="152" valign="top"><div align="center"><img src="<?php echo $avatar ?>" width="150" height="150" />
              
              <?php 
			  
			  $username_asli = $_SESSION['username'];
			  if ($user == $username_asli){
              echo "<a href='edit_profil.php?username=$username_asli'><strong>&gt;&gt; Edit Profil &lt;&lt;</strong></a> ";
			  }
			  else {
				  echo "";
				  }
			  ?>
              
              
              </div></td>
              <td width="392" valign="top"><table width="395" border="0">
                <tr>
                  <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong><font face="verdana" size="5">Profil</font></strong></div></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center"></div></td>
                </tr>
                <tr>
                  <td><strong>Nama Lengkap</strong></td>
                  <td><strong>: <?php echo $nama_lengkap ?></strong></td>
                </tr>
                <tr>
                  <td width="196"><strong>Username </strong></td>
                  <td width="189"><strong> : <?php echo $namauser ?></strong></td>
                </tr>
                <tr>
                  <td><strong>Terdaftar Sejak</strong></td>
                  <td><strong>: <?php echo $tanggal_daftar ?></strong></td>
                </tr>
                <tr>
                  <td><strong>Jenis Kelamin</strong></td>
                  <td><strong>: <?php echo $jenis_kelamin ?></strong></td>
                </tr>
                <tr>
                  <td><strong>Situs Web</strong></td>
                  <td><strong>:  <a href="http://<?php echo $situs_web ?>" target="_blank"><?php echo "Http://$situs_web"; ?></a></strong></td>
                </tr>
                <tr>
                  <td><strong>Total Post</strong></td>
                  <td><strong>: 
                  <?php 
				  //Mencari total post dari masing2 user
				  
				  $total_post = mysql_num_rows(mysql_query("SELECT * FROM tabel_topik WHERE pengirim = '$username'"));
				  echo "$total_post";
				  ?>
                  
                  
                  </strong></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </div>
      </div></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
    </tr>
    <tr>
      <td width="735"><div align="center">
        <table width="694" height="28" border="0">
          <tr>
            <td width="108"><div align="center"><a href="index.php"><img src="images/home.png" width="64" height="64" /></a><br />
              <strong>Home</strong></div></td>
            <td width="108"><div align="center"><strong><a href="create.php"><img src="images/new.png" width="64" height="64" title="Buat Thread Baru" /></a><br />Thread Baru</strong></div></td>
            <td width="110"><div align="center"><strong><a href="profil.php?username=<?php echo $username ?>"><img src="images/profil.png" width="64" height="64" title="Profil"/></a><br />Profil</strong></div></td>
            <td width="123"><div align="center"><strong><a href="members.php"><img src="images/members.png" width="64" height="64"  title="Lihat Daftar Member"/></a><br />Member Lain</strong></div></td>
            <td width="115"><div align="center"><strong><a href="gantipass.php"><img src="images/changepass.jpg" width="64" height="64" title="Ganti Password" /></a><br />Ganti Password</strong></div></td>
            <td width="104"><div align="center"><strong><a href="logout.php"><img src="images/log_off.png" width="64" height="64" title="Keluar" /></a><br />
              Keluar</strong></div></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000000"><div align="center">
        <table width="395" border="0">
          <tr class="hijau">
            <td><div align="center" class="hijau"><strong>Total Thread : <?php echo $jumlah_topik ?></strong></div></td>
            <td><div align="center" class="hijau"><strong>Total Member : <?php echo $jumlah_member ?></strong> </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
<div style="position: fixed; bottom: 0px; left: 10px;width:110px;height:115px;"></div>
<div style="position: fixed; bottom: 0px; right: 10px;width:110px;height:130px;">
  <div align="right"></div>
</div>
</body>
</html>
