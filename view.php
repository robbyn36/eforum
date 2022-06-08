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

//Menghitung jumlah topik dan jumlah memberwww
	$query3 = mysql_query("SELECT * FROM tabel_topik");
	$query4 = mysql_query("SELECT * FROM tabel_member");
	$jumlah_topik = mysql_num_rows($query3);
	$jumlah_member = mysql_num_rows($query4);
//mencari total view (dilihat)

$id_topik = $_GET['id_topik'];
$query6=mysql_fetch_array(mysql_query("select dilihat from tabel_topik where id_topik='$id_topik'"));
$dilihat = $query6 ['dilihat'] + 1;
$sql2 = "UPDATE tabel_topik SET dilihat='$dilihat' WHERE id_topik='$id_topik'";
$hasil2 = mysql_query($sql2, $koneksi);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View <?php 
//Mengambil judul topik
$query6=mysql_fetch_array(mysql_query("select * from tabel_topik where id_topik='$id_topik'"));
echo "&quot;" .$query6['topik']. "&quot;"?></title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <h1 align="center"><em>Forum</em></h1>
  <div align="center">
    <table width="963" height="701" border="1">
      <tr>
        <th height="39" colspan="5" scope="col"><em>IPA</em></th>
      </tr>
      <tr>
        <th width="1" rowspan="5" scope="row">&nbsp;</th>
        <th height="23" colspan="3" scope="row"><div align="right">Anda Login Sebagai:<?php echo $_SESSION['username']; echo " &nbsp;"?></div></th>
        <td width="3" rowspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td height="34" colspan="2"><div align="left"><em>Dikirim :</em><?php echo $query5['tanggal'];?></div>          
        <div align="center"></div>          <div align="center"></div></td>
        <td width="90"><div align="right">#1</div></td>
      </tr>
      <tr>
        <td height="110" colspan="3"><table width="924" border="0">
            <tr>
              <th width="204" scope="col"><img src="" alt="" name="ava" width="97" height="58" align="top"><?php echo $query5['pengirim'];?></th>
              <th width="704" scope="col"><div align="left">Topik :<?php echo $query5['topik']; ?></div></th>
            </tr>
          </table>
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="101" colspan="3"><?php echo $query5['isi']; ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="638" height="36">&nbsp;</td>
        <td width="197"><div align="right"><?php  echo $query5['total_balasan'];?>Balasan</div></td>
        <td height="36"><div align="right"><?php echo $query5['dilihat']; ?>Dilihat</div></td>
      </tr>
      <tr>
        <th rowspan="13" scope="row">&nbsp;</th>
        <td height="36" colspan="3"><img src="images/reply.gif" alt="reply" width="72" height="26" align="right"></td>
        <td rowspan="13">&nbsp;</td>
      </tr>
      <tr>
        <td height="36" colspan="3">Respon Untuk <?php echo $query5['topik'];?></td>
      </tr>
      <tr>
        <td height="36" colspan="3"><?php ?>&nbsp;</td>
      </tr>
      <tr>
        <td height="36" colspan="2">Tanggal :<?php  echo $rows['tanggal']; ?></td>
        <td height="36">#<?php echo $nomor++;?></td>
      </tr>
      <tr>
        <td height="36" colspan="3"><img name="ava" src="" width="89" height="49" alt=""><?php //Menyesuaikan gambar / avatar
				  $user2 = $rows['penjawab'];
				  $queryAvatar=mysql_fetch_array(mysql_query("select * from tabel_member where username='$user2'"));?><?php echo $rows['penjawab'];?></td>
      </tr>
      <tr>
        <td height="36" colspan="3">Re : <?php echo $rows['topik'];?></td>
      </tr>
      <tr>
        <td height="36" colspan="3"><?php echo $rows['isi'];?>&nbsp;</td>
      </tr>
      <tr>
        <td height="36" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="36" colspan="3"><table width="521" height="32" border="1" align="center">
          <tr>
            <th width="61" height="26" scope="col"><div align="center"><a href="http://127.0.0.1/forum/Eforum/index/">Home</a></div></th>
            <th width="114" scope="col"><div align="center"><a href="http://127.0.0.1/forum/Eforum/buatposting.php">Posting Baru</a></div></th>
            <th width="80" scope="col"><div align="center"><a href="http://127.0.0.1/forum/Eforum/profil.php">Profil</a></div></th>
            <th width="126" scope="col"><div align="center"><a href="http://127.0.0.1/forum/Eforum/gantipass.php">Ganti Password</a></div></th>
            <th width="106" scope="col"><div align="left"><a href="http://127.0.0.1/forum/s2/logout.php">
              <div align="center">Keluar</div>
            </div></th>
          </tr>
        </table></td>
      </tr>
    </table>
  </div>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>