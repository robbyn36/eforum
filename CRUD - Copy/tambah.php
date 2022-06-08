<?php
include 'koneksi.php';
?><form method="post">
<p>
<label for="id_admin">ID Admin</label>
<input type="text"id="id_admin" name="id_admin"/>
</p>
<p>
<label for="nama_admin">Nama Admin</label>
<input type="text" id="nama_admin" name="nama_admin"/>
</p>
<p>
<label for="username">Username</label>
<input type="text" id="username" name="username"/>
</p>
<p>
<label for="password">Password</label>
<input type="password" id="password" name="password"/>
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
<input type="submit" value="Simpan" name="simpan"/>
<input type="reset" value="Batal"/>
</p>
</form>
<?php
if(isset($_POST['simpan'])){
$a=$_POST['id_admin'];
$b=$_POST['nama_admin'];
$c=$_POST['username'];
$d=$_POST['password'];
$e=$_POST['status_admin'];
$hasil = mysql_query("Insert into admin values('$a','$b','$c','$d','$e')");
if($hasil){
?>
<br/>
<span>Inserted Success</span>
<?php
}
}
?>