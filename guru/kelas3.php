<?php
include 'koneksi.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Css/header.css" rel="stylesheet" type="text/css" />
<link href="../Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
.ssssss {
	color: #CCC;
}
</style>
</head>
<body bgcolor="#76c8f4">
	<div id="header">
    	<img src="../Menu/Forum_up.png" />
    </div>
	<div id="tulisan">
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8%" height="41" bgcolor="#999999">ID</th>
    <th width="30%" bgcolor="#999999">Nama Lengkap</th>
    <th width="11%" bgcolor="#999999">Kelas</th>
    <th width="23%" bgcolor="#999999">Total Point</th>
    <th width="28%" bgcolor="#999999">Tambah Point</th>
  </tr>
  <?php
$result = mysql_query("select * from tabel_member WHERE kelas='kelas3' order by id_member asc");
while($data=mysql_fetch_array($result)){?>
  <?php
}
?>
</table>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <?php
$result = mysql_query("select * from tabel_member WHERE kelas='kelas3' order by id_member asc");
while($data=mysql_fetch_array($result)){?>
  <tr>
<td width="8%" height="46"><form id="form1" name="form1" method="post" action="">
  <div align="center"><?php echo $data['id_member']?>
  </div>
</form></td>
<td width="30%"><form id="form2" name="form2" method="post" action="">
  <div align="center"><?php echo $data['nama_lengkap']?>
  </div>
</form></td>
<td width="11%"><form id="form3" name="form3" method="post" action="">
  <div align="center"><?php echo $data['kelas']?>
  </div>
</form></td>
<td width="23%"><form id="form4" name="form4" method="post" action="">
  <div align="center"><?php echo $data['point']?>
  </div>
</form></td>
<td width="28%"><form id="form5" name="form5" method="post" action="">
  <a href="point3.php?e=<?php echo $data['id_member']?>"onclick="return confirm ('Tambah Point ?')">
  <div align="center">+Point
  </div>
</form></td>
	
</tr>
<?php
}
?>
</table>
</div>
	<table width="176" height="46" border="1" align="center">
	  <tr>
	    <th bgcolor="#FFFFFF" width="80" height="40" scope="col"><div align="center"><a href="http://127.0.0.1/forum/s2v2/index/index.php"><img src="../images/home.png" alt="home" width="81" height="74" />Home</a></div>
	      <div align="center"></div></th>
	    <th bgcolor="#FFFFFF" width="80" scope="col"><form action="" method="post" name="form10" id="form10">
	      <a href="http://127.0.0.1/forum/s2v2/logout.php"><img src="../images/log_off.png" alt="home" width="78" height="74" /></a><a href="http://127.0.0.1/forum/s2v2/logout.php">Keluar</a>
	      </form></th>
      </tr>
</table>
	<p>&nbsp;</p>
</body>
</html>