<?php
include 'config.php';
?>
<table border="1" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th bgcolor="#999999999999999999">ID</th>
<th bgcolor="#999999999999999999">Nama</th>
<th bgcolor="#999999999999999999">Username</th>
<th bgcolor="#999999999999999999">Kelas</th>
<th bgcolor="#999999999999999999">Point</th>
<th bgcolor="#999999999999999999">Action</th>
</tr>
<?php
$result = mysql_query("select * from tabel_member where kelas ='kelas1'; order by id_member desc");
while($data=mysql_fetch_array($result)){?>
<tr>
<td><form id="form1" name="form1" method="post" action="">
  <div align="center"><?php echo $data['id_member']?>
  </div>
</form></td>
<td><form id="form2" name="form2" method="post" action="">
  <div align="center"><?php echo $data['nama_lengkap']?>
  </div>
</form></td>
<td><form id="form3" name="form3" method="post" action="">
  <div align="center"><?php echo $data['username']?>
  </div>
</form></td>
<td><form id="form4" name="form4" method="post" action="">
  <div align="center"><?php echo $data['kelas']?>
    </div>
</form></td>
<td><form id="form6" name="form6" method="post" action="">
  <div align="center"><?php echo $data['point']?>
    </div>
</form></td>
<td><form id="form7" name="form7" method="post" action="">
  <a href="point.php?e=<?php echo $data['id_admin']?>"onclick="return confirm ('Tambah Point ?')">
  <div align="center">+Point
  </div>
</form></td>
	
</tr>
<?php
}
?>
</table>