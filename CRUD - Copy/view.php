<?php
include 'koneksi.php';
?>
<table border="1" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th>ID</th>
<th>Nama</th>
<th>Username</th>
<th>Password</th>
<th>Status</th>
<th>Point</th>
<th>Action</th>
</tr>
<?php
$result = mysql_query("select * from admin order by id_admin desc");
while($data=mysql_fetch_array($result)){?>
<tr>
<td><?php echo $data['id_admin']?></td>
<td><?php echo $data['nama_admin']?></td>
<td><?php echo $data['username']?></td>
<td><?php echo $data['password']?></td>
<td><?php echo $data['status_admin']?></td>
<td><a href="update.php?u=<?php echo $data['id_admin']?>">edit</a> <br/> 
	<a href="delete.php?d=<?php echo $data['id_admin']?>"> hapus</a><br>
	<a href="point.php?e=<?php echo $data['id_member']?>"onclick="return confirm ('Tambah Point ?')">+Point</td>
	
</tr>
<?php
}
?>
</table>