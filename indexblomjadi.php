<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
	exit();
	}

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
}
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <h1 align="center"><em>Forum</em></h1>
  <div align="center">
    <table width="963" height="352" border="1">
      <tr>
        <th height="39" colspan="8" scope="col"><em>IPA</em></th>
      </tr>
      <tr>
        <th width="21" rowspan="5" scope="row">&nbsp;</th>
        <th height="23" colspan="6" scope="row"><div align="right">Anda Login Sebagai:<?php echo $_SESSION['username']; echo " &nbsp;"?></div></th>
        <td width="30" rowspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td width="117" height="23"><div align="center"><em>#</em></div></td>
        <td width="237"><div align="center"><em>Topik</em></div></td>
        <td width="145"><div align="center"><em>Pengirim</em></div></td>
        <td width="115"><div align="center"><em>Balasan</em></div></td>
        <td width="129"><div align="center"><em>Dilihat</em></div></td>
        <td width="117"><div align="center"><em>Tanggal</em></div></td>
      </tr>
      <tr>
        <td height="192" colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td height="23" colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td height="36" colspan="6"><table width="521" height="32" border="1" align="center">
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