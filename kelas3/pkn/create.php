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
	$query2=mysql_fetch_array(mysql_query("select * from tabel_topik_pkn3 where pengirim='$username'"));


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../Css/header.css" rel="stylesheet" type="text/css" />
<link href="../../Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
.merah1 {color: #F00;
}
</style>
</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="../../Menu/Forum_up.png" />
</div>
<div id="tulisan">
<form id="form1" name="form1" method="post" action="proses_create.php">
  <table width="608" height="319" border="1" align="center">
    <tr>
      <td colspan="3" bgcolor="#ffffff"><div align="center"><strong><font size="5">Thread Baru</font></strong></div></td>
    </tr>
    <tr>
      <td colspan="3" valign="top"><div align="center" class="merah1"> <strong>
        <?php 
			  
			  
			  if(isset($_GET['status'])){
				  $status = $_GET['status'];
				  }
			   else{
				   $status = "";
				   }
			  
			  echo "$status";
			  
			  
			  ?>
      </strong></div></td>
    </tr>
    <tr>
      <td height="28" valign="top"><strong>Username</strong></td>
      <td valign="top"><div align="center"><strong>:</strong></div></td>
      <td valign="top"><input name="username" type="text" id="username" value="<?php echo $username?>" size="3"  />        &nbsp;</td>
    </tr>
    <tr>
      <td width="119" valign="top"><strong>Topik</strong></td>
      <td width="11" valign="top"><div align="center"><strong>:</strong></div></td>
      <td width="332" valign="top"><strong>
        <input name="topik" type="text" size="50" maxlength="40" />
        * ( Judul Thread )</strong></td>
    </tr>
    <tr>
      <td valign="top"><strong>Isi</strong></td>
      <td valign="top"><div align="center"><strong>:</strong></div></td>
      <td valign="top"><strong>
        <textarea name="isi" cols="80" rows="8"></textarea>
      </strong></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><input type="submit" value="Kirim" />
        &nbsp;
        <input type="reset" value="Hapus" /></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" bgcolor="#ffffff">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</div>
</body>
</html>