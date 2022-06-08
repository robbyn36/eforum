<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:../login.php");
	exit();
	}

if(isset($_SESSION['username'])){
	$session = $_SESSION['tipe'];
	$username = $_SESSION['username'];
}
	include "../../config.php";
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$username'"));
	$query2=mysql_fetch_array(mysql_query("select * from tabel_topik_mtk3 where pengirim='$username'"));


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
.merah {font-weight: ;
	color: #F00;
}
.user {
	font-size: 18px;
}
</style>
</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="../../Menu/Forum_up.png" />
</div>
<div id="tulisan">
<h2 align="center">Mtk kelas 3</h2>
<table width="719" border="0" align="center" style="border: 2px solid gray; border-radius: 10px 10px 10px 10px; background:#fff;">
  <tr>
    <td bgcolor="#ffffff"><div align="right"><strong>Anda Login Sebagai :
      <?php  echo $_SESSION['username']; echo " &nbsp;"?>
    </strong></div></td>
  </tr>
  <tr>
    <?php 
	$id_topik = $_GET['id_topik'];
	$query5=mysql_fetch_array(mysql_query("select * from tabel_topik_mtk3 where id_topik='$id_topik'"));
	
	//mencari gambar pengirim thread
	$username = $query5['pengirim'];
	$query7=mysql_fetch_array(mysql_query("select * from tabel_member where username='$username' "));
	?>
    <td height="304"><table width="100%" border="1" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF" style="border: 2px solid gray; border-radius: 10px 10px 10px 10px; background:#fff;">
      <tr>
        <td width="100%" bgcolor="#CCCCCC"><strong><img src="../../images/thread.png" alt="" width="40" height="40" align="left" />Dikirim <?php echo $query5['tanggal']; ?></strong></td>
        <td width="100%" height="27" bgcolor="#CCCCCC"><div align="right"><strong># 1</strong></div></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" bgcolor="#FFFFFF"><p><strong><img src="<?php echo $query7['avatar']; ?>" alt="" width="50" height="50" align="left" /> <a href="../profil.php?username=<?php echo $query5['pengirim']; ?>"><font size="4"><?php echo $query5['pengirim']; ?></font></a></strong><br />
          <span class="merah"><font size="3">Topik :</font></span><font size="3"><?php echo $query5['topik']; ?> </font> 
          
          
          <strong><font size="3">
            <hr />
            </font></strong>
          </p>
          <pre><font size="4" face="Comic Sans MS, cursive"><?php echo $query5['isi']; ?></font></pre></td>
      </tr>
      <tr>
        <td height="43" colspan="2" valign="top" bgcolor="#CCCCCC"><div align="right">
          <table width="293" border="0">
            <tr>
              <td width="133"><div align="right"></div></td>
              <td width="252"><div align="right"></div></td>
            </tr>
          </table>
        </div></td>
      </tr>
    </table>
      <div align="right"><br />
      </div>
      <div align="right"></div>
      <div align="left"><strong>Respon untuk &quot;<?php echo $query5['topik']; ?>&quot;</strong> <br />
      </div>
      <p>
        <?php

// Menampilkan komentar
$nomor = 2;
$sql2="SELECT * FROM tabel_komentar_mtk3 WHERE id_topik='$id_topik' ORDER BY tanggal desc";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
?>
      </p>
      <table width="100%" border="0">
        <tr>
          <td bgcolor="#CCCCCC"><table width="100%" border="1">
            <tr>
              <td width="27%" valign="top">Tanggal : <?php echo $rows['tanggal']; ?></td>
              <td width="27%" valign="top">&nbsp;</td>
              <td width="27%" valign="top"><div align="right"><strong># <?php echo $nomor++; ?></strong></div></td>
            </tr>
            <tr>
              <td height="20" colspan="3" valign="top" bgcolor="#FFFFFF"><p>
                <?php
                  //Menyesuaikan gambar / avatar
				  $user2 = $rows['penjawab'];
				  $queryAvatar=mysql_fetch_array(mysql_query("select * from tabel_member where username='$user2'"));
				  
				  ?>
                <a href="../profil.php?username=<?php echo  $rows['penjawab']; ?>" ><strong><img src="<?php echo $queryAvatar['avatar']; ?>" alt="" width="50" height="50" align="left" /></strong><strong class="user"><?php echo $rows['penjawab']; ?></strong></a><br />
                <strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><br />
              </p>
                <hr />
                <font size="3"><?php echo $rows['isi']; ?></font></td>
            </tr>
            <tr>
              <td height="18" colspan="3" valign="top" bgcolor="#CCCCCC">
			 <?php
			 if ($session =="guru")
			{
		echo "<script>function sure() { return confirm('Tambah Point ?'); } </script>";
                            echo "<a href='../../guru/point1.php?e=".$rows['penjawab']."' onclick='return sure()'> +Point </a>";
			}
				else
				{
				}
				?>
			 
              </a></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <p>
        <?php
}
?>
      </p></td>
  </tr>
  <tr>
    <td><div align="right"><a href="balas.php?id_topik=<?php echo $id_topik; ?>"><img src="../../images/reply.gif" alt="" width="72" height="26" title="Balas Thread Ini"/></a></div></td>
  </tr>
  <tr>
    <td width="709">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="center">
      <table width="417" height="48" border="1" align="center">
        <tr>
          <th width="86" height="40" bgcolor="#FFFFFF" scope="col"><div align="center"><a href="../../index/index.php"><img src="../../images/home.png" width="60" height="60" alt="HOME" />Home</a></div></th>
          <th width="104" bgcolor="#FFFFFF" scope="col"><div align="center"><a href="../gantmtkss.php"></a>
            <form id="form1" name="form1" method="post" action="">
              <a href="index2mtk.php"><img src="../../images/indexpelajaran.png" width="89" height="64" alt="index" />Index mtk 3</a>
            </form>
          </div></th>
          <th width="108" bgcolor="#FFFFFF" scope="col"><form id="form3" name="form3" method="post" action="">
            <a href="../kelas3.php"><img src="../../images/indexkelas.png" width="79" height="63" alt="kelas" />Index Kelas 3</a>
          </form>
            <a href="../kelasvii/kelasVII.php"></a></th>
          <th width="91" bgcolor="#FFFFFF" scope="col"><form id="form2" name="form2" method="post" action="">
            <a href="../../logout.php"><img src="../../images/log_off.png" width="60" height="60" alt="exit" />Keluar</a>
          </form></th>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</div>
</body>
</html>