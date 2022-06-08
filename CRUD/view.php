<?php
include "koneksi.php";
?>
<html>
<head>
	<link href="../Css/header.css" rel="stylesheet" type="text/css" />
	<link href="../Css/tulisan.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.satu {
	color: #CCC;
}
.lll {
	color: #FF0;
}
.lll {
	font-family: Arial, Helvetica, sans-serif;
}

#form2 div {
	font-size: 12px;
}
#form2 div {
	font-size: 16px;
}
</style>
</head>
<body bgcolor="#76c8f4">
	<div id="header">
    	<img src="../Menu/Forum_up.png">
    </div>
    <div id="tulisan">
<table width="100%" height="63" border="1" align="center" cellpadding="0" cellspacing="0">
<tr class="fontt">
<th width="10%" height="21" bgcolor="#999999">ID_Member</th>
<th width="8%" bgcolor="#999999">Username</th>
<th width="8%" bgcolor="#999999">Password</th>
<th width="14%" bgcolor="#999999">Nama Lengkap</th>
<th width="11%" bgcolor="#999999">E-mail</th>
<th width="13%" bgcolor="#999999">Jenis Kelamin</th>

<th width="16%" bgcolor="#999999">Action</th>
</tr>
<?php
$result = mysql_query("select * from tabel_member where tipe='admin' order by id_member desc");
while($data=mysql_fetch_array($result)){?>
<tr>
<td height="40"><form id="form1" name="form1" method="post" action="">
  <div align="center"><?php echo $data['id_member']?>
  </div>
</form></td>
<td><form id="form2" name="form2" method="post" action="">
  <div align="center"><?php echo $data['username']?></div>
</form></td>
<td><form id="form3" name="form3" method="post" action="">
  <div align="center"><?php echo $data['password']?></div>
</form></td>
<td><form id="form4" name="form4" method="post" action="">
  <div align="center"><?php echo $data['nama_lengkap']?></div>
</form></td>
<td><form id="form5" name="form5" method="post" action="">
  <div align="center"><?php echo $data['email']?></div>
</form></td>
<td><form id="form6" name="form6" method="post" action="">
  <div align="center"><?php echo $data['jenis_kelamin']?>
    </div>
</form></td>

<td><a href="update.php?u=<?php echo $data['id_member']?>"></a> <form name="form9" method="post" action="">
  <div align="center"><a href="update.php?u=<?php echo $data['id_member']?>">edit</a>
    / <a href="delete.php?d=<?php echo $data['id_member']?>"onclick="return confirm('Are you sure you want to delete?')">hapus</a><br/>
    <a href="delete.php?d=<?php echo $data['id_member']?>"onclick="return confirm('Are you sure you want to delete?')"></a></div>
</form></td>
</tr>
<?php
}
?>
</table>

</div>
<p>&nbsp;</p>
<table width="176" height="46" border="1" align="center">
  <tr>
    <th bgcolor="#FFFFFF" width="80" height="40" scope="col"><div align="center"><a href="../index/index.php"><img src="../images/home.png" alt="home" width="81" height="74" />Home</a></div>
      <div align="center"></div></th>
    <th bgcolor="#FFFFFF" width="80" scope="col"><form name="form10" method="post" action="">
      <a href="../logout.php"><img src="../images/log_off.png" alt="home" width="78" height="74" /></a><a href="../logout.php">Keluar</a>
    </form></th>
  </tr>
</table>
</body>
</html>