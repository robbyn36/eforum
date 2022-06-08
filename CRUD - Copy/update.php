<?php
include 'koneksi.php';
?>
<?php
$u = $_GET['u'];
$result = mysql_query("select * from admin where id_admin='$u'");
while ($data=  mysql_fetch_array($result)){
?>
<form method="post">
<p>
<input type="hidden" id="id_admin" name="id_admin" value="<?php echo $data['id_admin'] ?>"/>
</p>
<p>
<label for="nama_admin">Nama Admin</label>
<input type="text" id="nama_admin" name="nama_admin" value="<?php echo $data['nama_admin'] ?>"/>
</p>
<p>
<label for="username">Username</label>
<input type="text" id="username" name="username" value="<?php echo $data['username'] ?>"/>
</p>
<p>
<label for="password">Password</label>
<input type="password" id="password" name="password" value="<?php echo $data['password'] ?>"/>
</p>
<p>
<label>Status Admin</label>
<select name="status_admin">
<option>Aktif</option>
<option>Tidak Aktif</option>
</select>
</p>
<br/>
<p>
<label></label>
<input type="submit" value="Update" name="update"/>
</p>
</form>
<?php
}
if(isset($_POST['update'])){
$a=$_POST['id_admin'];
$b=$_POST['nama_admin'];
$c=$_POST['username'];
$d=$_POST['password'];
$e=$_POST['status_admin'];
$hasil = mysql_query("update admin set nama_admin='$b', username='$c', password='$d', status_admin='$e' where id_admin='$u'");
if($hasil){
?>
<br/>
<span>Updated Success</span>
<?php
echo '<script>window.location: view.php;</script>';
}
}
?>