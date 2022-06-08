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


//Mengambil nama informasi user
	$user=$_GET['username'];
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$user'"));
	$nama_lengkap = $query['nama_lengkap'];
	$namauser = $query['username'];
	$tanggal_daftar = $query['tanggal_daftar'];
	$jenis_kelamin  = $query['jenis_kelamin'];
	$avatar			= $query['avatar'];
	$situs_web		= $query['situs_web'];
	$email			=$query['email'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Css/header.css" rel="stylesheet" type="text/css" />
<link href="Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
.hijau {
	color: #000;
}
</style>
</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="Menu/Forum_up.png" />
</div>
<div id="tulisan">
<table width="736" border="1" align="center" style="border: 2px solid gray; border-radius: 10px 10px 10px 10px; background:#fff;">
  <tr>
    <td width="697" height="29" bgcolor="#FFFFFF"><div align="right"><strong class="hijau">Anda Login Sebagai :
      <?php  echo $_SESSION['username']; echo " &nbsp;"?>
    </strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <div align="center">
        <form id="form1" name="form1" method="post" action="update_profil.php">
          <table width="100%" border="1">
            <tr>
              <td width="150" height="152" valign="top"><div align="center"><img src="<?php echo $avatar ?>" alt="" width="150" height="150" /><br />
              </div></td>
              <td width="392" valign="top"><table width="97%" border="1">
                <tr>
                  <td colspan="2" bgcolor="#CCCCCC"><div align="center"><strong><font face="verdana" size="5">Update Profil</font></strong></div></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
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
                  <td><strong>Nama Lengkap</strong></td>
                  <td><strong>:
                    <input name="nama_lengkap" type="text" value="<?php echo $nama_lengkap ?>" />
                    *</strong></td>
                </tr>
                <tr>
                  <td width="192"><strong>Username </strong></td>
                  <td width="294"><strong> :
                    <input name="username" type="text" value="<?php echo $username ?>" readonly="readonly" />
                  </strong></td>
                </tr>
                <tr>
                  <td><strong>Terdaftar Sejak</strong></td>
                  <td><strong>: <?php echo $tanggal_daftar ?></strong></td>
                </tr>
                <tr>
                  <td><strong>E-Mail</strong></td>
                  <td><strong>: 
                    <input name="email" type="text" id="situs_web" value="<?php echo $email ?>"/>
                    *</strong></td>
                </tr>
                <tr>
                  <td><strong>Url Avatar </strong></td>
                  <td><strong>:
                    <input name="avatar" type="text" value="<?php echo $avatar ?>"/>
                    * url gambar </strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="button" id="button" value="Submit" />
                    <input type="reset" name="button2" id="button2" value="Reset" /></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </form>
      </div>
    </div></td>
  </tr>
</table>
</div>
</body>
</html>