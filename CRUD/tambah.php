<?php
include 'koneksi.php';
?><form method="post">
<table width="429" height="221" border="1" align="center">
  <tr>
    <th height="45" colspan="2" scope="row"><h2>ADD USER</h2></th>
    </tr>
  <tr>
    <td width="129" scope="col"><strong>Nama Lengkap :</strong></td>
    <td width="232" scope="col"><input name="nama_lengkap" type="text" id="nama_lengkap" value="" size="30" /></td>
  </tr>
  <tr>
    <td scope="row"><strong>Username :</strong></td>
    <td><input name="username" type="text" size="30" maxlength="30" /></td>
  </tr>
  <tr>
    <td scope="row"><label for="password2"><strong>Password :</strong></label></td>
    <td><input name="password" type="password" size="30" maxlength="30" /></td>
  </tr>
  <tr>
    <td scope="row"><label><strong>Email :</strong></label></td>
    <td><input name="email" type="text" size="30" maxlength="30" /></td>
  </tr>
  <tr>
    <td scope="row"><strong>Jenis Kelamin :</strong></td>
    <td><label for="laki2">
      <select name="jenis_kelamin">
<option>Perempuan</option>
<option>Laki-Laki</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="reset" value="Batal"/>
      <input type="submit" value="simpan" name="simpan"/></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
<?php
if(isset($_POST['simpan'])){
$a=$_POST['nama_lengkap'];
$b=$_POST['username'];
$c=$_POST['password'];
$d=$_POST['email'];
$e=$_POST['jenis_kelamin'];
$hasil = mysql_query("Insert into tabel_member values('$a','$b','$c','$d','$e')");
if($hasil){
?>
<br/>
<span>Inserted Success</span>
<?php
}
}
?>