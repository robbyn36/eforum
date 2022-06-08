<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:http://127.0.0.1/forum/s2/login.php");
	exit();
	}

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
}

	include "../../config.php";
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$username'"));
	$query2=mysql_fetch_array(mysql_query("select * from tabel_topik_bindo1 where pengirim='$username'"));

//Menghitung jumlah topik dan jumlah member
	$query3 = mysql_query("SELECT * FROM tabel_topik_ips1");
	$query4 = mysql_query("SELECT * FROM tabel_member");
	$jumlah_topik = mysql_num_rows($query3);
	$jumlah_member = mysql_num_rows($query4);
//mencari total view (dilihat)

/*$id_topik = $_GET['id_topik'];
$query6=mysql_fetch_array(mysql_query("select dilihat from tabel_topik_bindo1 where id_topik='$id_topik'"));
$dilihat = $query6 ['dilihat'] + 1;
$sql2 = "UPDATE tabel_topik_ips1 SET dilihat='$dilihat' WHERE id_topik='$id_topik'";
$hasil2 = mysql_query($sql2, $koneksi);
*/
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../Css/header.css" rel="stylesheet" type="text/css" />
<link href="../../Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
.hijau {	color: green;
}
.linktopik {
	text-align: center;
}
</style>

</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="../../Menu/Forum_up.png" />
</div>
<div id="tulisan">
<h2 align="center">B.Indonesia kelas 1</h2>
<table width="700" border="1" align="center" style="border: 2px solid gray; border-radius: 10px 10px 10px 10px; background:#fff;">
  <tr>
    <td height="29" bgcolor="#ffffff"><div align="right"><strong>Anda Login Sebagai :
      <?php  echo $_SESSION['username']; echo " &nbsp;"?>
    </strong></div></td>
  </tr>
  <tr>
    <td height="249"><div align="center">
      <div align="center" style
      ="overflow:auto; width:790px; height:200px;">
        <table width="771" border="0">
          <tr>
            <td width="62" bgcolor="#CCCCCC"><div align="center">#</div></td>
            <td width="253" bgcolor="#CCCCCC"><div align="center"><font face="verdana" size="2">Topik</font></div></td>
            <td width="185" bgcolor="#CCCCCC"><div align="center"><font face="verdana" size="2">Pengirim</font></div></td>
            <td width="243" bgcolor="#CCCCCC"><div align="center"><font face="verdana" size="2">Tanggal</font></div></td>
            </tr>
          <?php

$nomor = 1;


$sql = "SELECT * FROM tabel_topik_bindo1 ORDER by tanggal DESC";
$hasil=mysql_query($sql,$koneksi);
while($record=mysql_fetch_array($hasil)){ 

?>
          <tr>
            <td height="27" valign="top">&nbsp;<font face="verdana" size="2"><?php echo $nomor++; ?></font></td>
            <td valign="top"><img src="../../images/thread.png" alt="" width="27" height="25" align="left" />
              <form id="form1" name="form1" method="post" action="">
                &nbsp;
                <font face="verdana" size="2"><a href="viewbindo1.php?id_topik=<?php echo $record['id_topik']; ?>"><?php echo $record['topik']; ?></a></font>
              </form></td>
            <td valign="top"><div align="center"><font face="verdana" size="2"><?php echo $record['pengirim']; ?></font></div></td>
            <td valign="top"><div align="center"><font face="verdana" size="2"><?php echo $record['tanggal']; ?></font></div></td>
            </tr>
          <?php
//Berhenti Looping 
}
mysql_close();
?>
          </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div></td>
  </tr>
  <tr>
    <td width="735"><div align="right">
      <table width="521" height="79" border="1" align="center">
        <tr>
          <th height="73" scope="col"><div align="center"><a href="../../index/index.php"><img src="../../images/home.png" width="50" height="50" alt="home" /><br />
            Home</a></div></th>
          <th scope="col"><div align="center">
            <p><a href="create.php"><img src="../../images/new.png" width="50" height="50" alt="ll" /><br />
              Posting Baru</a><a href="create.php"></a></p>
          </div></th>
          <th scope="col"><div align="center"><a href="../../profil.php?username=<?php echo $username ?>"><img src="../../images/profil.png" alt="profil" width="50" height="50" /><br />
            Profil</a></div></th>
          <th scope="col"><div align="center"><a href="../gantipass.php"><img src="../../images/changepass.jpg" width="50" height="50" alt="pass" /><br />
            Ganti Password</a></div></th>
          <th scope="col"><div align="center"><a href="../../logout.php"><img src="../../images/log_off.png" width="50" height="50" alt="exit" /><br />
            Keluar</a></div></th>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff"><div align="center"></div></td>
  </tr>
</table>
</div>
</body>
</html>