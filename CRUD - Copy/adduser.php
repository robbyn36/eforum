


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.abu_abu {	color: #999;
}
.merah {	font-weight: bold;
	color: #F00;
}
.putih {	color: #FFF;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="proses_registrasi.php">
  <table width="411" border="1" align="center">
    <tr>
      <td colspan="2" align="left" valign="top" bgcolor="#ffffff"><div align="center" class="hitam"><strong><font size="6" face="Verdana">Add User</font></strong></div></td>
    </tr>
    <tr>
      <td colspan="2" align="left" valign="top"><div align="center"> <strong> <span class="merah">
        <?php 
			  
			  
			  if(isset($_GET['status'])){
				  $status = $_GET['status'];
				  }
			   else{
				   $status = "";
				   }
			  
			  echo "$status";
			  
			  
			  ?>
      </span></strong></div></td>
    </tr>
    <tr>
      <td align="left" valign="top"><span class="hitam">Nama Lengkap</span></td>
      <td align="left" valign="top"><span class="hitam">
        <input name="nama_lengkap" type="text" maxlength="30" id="nama_lengkap" />
        <em>* (Max 30 Char)</em></span></td>
    </tr>
    <tr>
      <td width="111" align="left" valign="top"><span class="hitam">Username</span></td>
      <td width="290" align="left" valign="top"><span class="hitam">
        <input name="username" type="text" maxlength="20" />
        * <em>(Max 20 Char)</em></span></td>
    </tr>
    <tr>
      <td align="left" valign="top"><span class="hitam">Password</span></td>
      <td align="left" valign="top"><span class="hitam">
        <input name="password" type="password" maxlength="50" />
        * <em>(Max 50 Char)</em></span></td>
    </tr>
    <tr>
      <td align="left" valign="top"><span class="hitam">Email</span></td>
      <td align="left" valign="top"><span class="hitam">
        <input name="email" type="text" maxlength="40" />
        * <em>(Max 40 Char)</em><strong><br />
        </strong></span></td>
    </tr>
    <tr>
      <td align="left" valign="top"><span class="hitam">Jenis Kelamin</span></td>
      <td align="left" valign="top"><span class="hitam">
        <input name="jenis_kelamin" type="radio" value="Laki-laki" checked="checked" />
        Laki-kaki
        <input name="jenis_kelamin" type="radio" value="Perempuan" />
        Perempuan *</span></td>
    </tr>
    <tr>
      <td align="left" valign="top"><input name="avatar" type="hidden" value="avatar/default.jpg" />
        &nbsp;</td>
      <td align="left" valign="top"><span class="putih">
        <input name="input" type="submit" value="Tambah User" />
      </span></td>
    </tr>
  </table>
</form>
</body>
</html>