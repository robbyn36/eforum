<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:http://127.0.0.1/forum/s2v2/login.php");
	exit();
	}

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
}
	include "config.php";
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$username'"));
	$query2=mysql_fetch_array(mysql_query("select * from tabel_topik_seni3 where pengirim='$username'"));



//Menghitung jumlah topik dan jumlah member
	$query3 = mysql_query("SELECT * FROM tabel_topik_ips1");
	$query4 = mysql_query("SELECT * FROM tabel_member");
	$jumlah_topik = mysql_num_rows($query3);
	$jumlah_member = mysql_num_rows($query4);
//mencari total view (dilihat)

$id_topik = $_GET['id_topik'];
$query6=mysql_fetch_array(mysql_query("select dilihat from tabel_topik_ips1 where id_topik='$id_topik'"));
$dilihat = $query6 ['dilihat'] + 1;
$sql2 = "UPDATE tabel_topik SET dilihat='$dilihat' WHERE id_topik='$id_topik'";
$hasil2 = mysql_query($sql2, $koneksi);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../Css/header.css" rel="stylesheet" type="text/css" />
<link href="../../Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
.merah {font-weight: bold;
	color: #F00;
}
</style>
</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="../../Menu/Forum_up.png" />
</div>
<div id="tulisan">
<p align="center"><?php //mengambil biodata yang membalas thread
		$id_topik = $_GET['id_topik'];
		$hasil=mysql_fetch_array(mysql_query("select * from tabel_topik_seni3 where id_topik='$id_topik'"));?>&nbsp;</p>
                    <form id="form1" name="form1" method="post" action="proses_balas.php">

<table width="378" border="1" align="center">
  <tr>
    <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong><font size="5">Reply Thread</font></strong></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center" class="merah">
      <?php 
			  
			  
			  if(isset($_GET['status'])){
				  $status = $_GET['status'];
				  }
			   else{
				   $status = "";
				   }
			  
			  echo "$status";
			  
			  
			  ?>
    </div></td>
  </tr>
  <tr>
    <td><strong>Id Topik</strong></td>
    <td><strong>:
      <input name="id_topik" type="text" value="<?php echo $hasil['id_topik']; ?>" readonly="readonly" />
    </strong></td>
  </tr>
  <tr>
    <td><strong>Topik</strong></td>
    <td><strong>:
      <input name="topik" type="text" id="topik" value="<?php echo $hasil['topik']; ?>" readonly="readonly" />
    </strong></td>
  </tr>
  <tr>
    <td><strong>Penjawab</strong></td>
    <td><strong>:
      <input name="penjawab" type="text" value="<?php echo $username; ?>" readonly="readonly" />
    </strong></td>
  </tr>
  <tr>
    <td height="140" colspan="2"><textarea name="isi" cols="90" rows="8"></textarea></td>
  </tr>
  <tr>
    <td width="94">&nbsp;</td>
    <td width="278"><div align="right">
      <input name="input" type="submit" value="Simpan" />
    </div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>
</form>
</div>
</body>
</html>