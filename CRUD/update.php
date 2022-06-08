<?php
include 'koneksi.php';
?>
<?php
$u = $_GET['u'];
$result = mysql_query("select * from tabel_member where id_member='$u'");
while ($data=  mysql_fetch_array($result)){
?>
<html>
<head>
	<link href="../Css/header.css" rel="stylesheet" type="text/css" />
	<link href="../Css/tulisan.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#76c8f4">
	<div id="header">
    	<img src="../Menu/Forum_up.png" />
    </div>
    <div id="tulisan">
<form method="post">
<p align="center">
<input type="hidden" id="id_member" name="id_member" value="<?php echo $data['id_member'] ?>"/>
</p>
<div align="center">
  <table width="438" height="156" border="1">
    <tr>
      <td scope="row">Username</td>
      <td width="186"><input type="text" name="username" id="username" value="<?php echo $data['username'] ?>" /></td>
    </tr>
    <tr>
      <td scope="row">Password</td>
      <td><input type="text" name="password" id="password" value="<?php echo $data['password'] ?>" /></td>
      </tr>
    <tr>
      <td scope="row">Nama Lengkap</td>
      <td><input type="text" name="nama_lengkap" id="nama_lengkap"  value="<?php echo $data['nama_lengkap'] ?>"/></td>
      </tr>
    <tr>
      <td scope="row">Email</td>
      <td><input type="text" name="email" id="email" value="<?php echo $data['email'] ?>"/></td>
    </tr>
    <tr>
      <td scope="row">Kelas</td>
      <td><label for="textfield4">
        <input type="text" name="kelas" id="kelas" value="<?php echo $data['kelas'] ?>"/>
      </label></td>
    </tr>
    <tr>
      <td scope="row">Level</td>
      <td><input type="text" name="level" id="kelas2" value="<?php echo $data['level'] ?>"/></td>
    </tr>
    <tr>
      <td scope="row">Jenis Kelamin</td>
      <td><select name="jenis_kelamin">
<option>Laki-Laki</option>
<option>Perempuan</option>
      </select></td>
    </tr>
    </table>
</div>
<p align="center">
  <input type="submit" value="update" name="update"/>
</p>
</form>


<?php
}
if(isset($_POST['update'])){
$a=$_POST['id_member'];
$b=$_POST['username'];
$c=$_POST['password'];
$d=$_POST['nama_lengkap'];
$e=$_POST['email'];
$f=$_POST['kelas'];
$g=$_POST['level'];
$h=$_POST['jenis_kelamin'];
$hasil = mysql_query("update tabel_member set username='$b', password='$c', nama_lengkap='$d', email='$e',kelas='$f',level='$g' ,jenis_kelamin='$h' where id_member='$u'");
if($hasil){
?>
  <br/>
  
  <?php
echo "<script> alert('Edit User Berhasil.'); location = 'view.php'; </script>";
}
}
?>
</div>
    <table width="176" height="46" border="1" align="center">
      <tr>
        <th bgcolor="#FFFFFF" width="80" height="40" scope="col"><div align="center"><a href="http://127.0.0.1/forum/s2v2/index/index.php"><img src="../images/home.png" alt="home" width="81" height="74" />Home</a></div>
          <div align="center"></div></th>
        <th bgcolor="#FFFFFF" width="80" scope="col"><form name="form10" method="post" action="">
          <a href="http://127.0.0.1/forum/s2v2/logout.php"><img src="../images/log_off.png" alt="home" width="78" height="74" /></a><a href="http://127.0.0.1/forum/s2v2/logout.php">Keluar</a>
        </form></th>
      </tr>
    </table>
    <p>&nbsp;</p>
</body>
</html>

