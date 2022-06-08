<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Css/header.css" rel="stylesheet" type="text/css" />
<link href="../Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
.abu_abu {	color: #999;
}
.merah {	font-weight: bold;
	color: #F00;
}
.putih {	color: #FFF;
}
.error {
			font-size:small;
			color:red;
		}
</style>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('#frm-mhs').validate({
				rules: {
					password2: {
						equalTo: "#password1"
					}
				},
				messages: {
					pass2: {
						equalTo: "Password tidak sama"
					}
				}
			});
		});
		
		$.validator.addMethod(
			"indonesianDate",
			function(value, element) {
				// put your own logic here, this is just a (crappy) example
				return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
			},
			"Please enter a date in the format DD/MM/YYYY"
		);
		</script>
</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="../Menu/Forum_up.png" />
</div>
<div id="tulisan">
<form id="frm-mhs" name="form1" method="post" action="proses_registrasi.php">
  <table width="552" border="1" align="center">
    <tr>
      <td colspan="2" align="left" valign="top" bgcolor="#ffffff"><div align="center" class="hitam"><strong><font size="6" face="Verdana">Add User</font></strong></div></td>
    </tr>
    <tr>
      <td colspan="2" align="left" valign="top"><div align="center"> <strong> <span class="merah">
        <?php 
			  
			  
			  if(isset($_POST['status'])){
				  $status = $_POST['status'];
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
      <td width="101" align="left" valign="top"><span class="hitam">Username</span></td>
      <td width="435" align="left" valign="top"><span class="hitam">
        <input name="username" type="text" maxlength="20" />
        * <em>(Max 20 Char)</em></span></td>
    </tr>
    <tr>
      <td align="left" valign="top"><span class="required">Password</span></td>
      <td align="left" valign="top"><span class="hitam">
        <input name="password" type="password" maxlength="50" id="password1"/>
        * <em>(Max 50 Char)</em></span></td>
    </tr>
    <tr>
      <td align="left" valign="top"><span class="required">Re-Password</span></td>
      <td align="left" valign="top"><span class="hitam">
        <input name="password2" type="password" maxlength="50" id="password2"/>
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
      <td align="left" valign="top">Tipe</td>
      <td align="left" valign="top"><label for="textfield"></label>
        <em>
          <select name="tipe" id="select3">
            <option selected="selected">admin</option>
            <option>guru</option>
            <option>murid</option>
          </select>
        </em></td>
    </tr>
    <tr>
      <td align="left" valign="top">Kelas</td>
      <td align="left" valign="top"><label for="select2"><span class="hitam">
        </span></label>
        <label for="select4"></label>
        <select name="kelas" id="select4">
          <option selected="selected">-</option>
          <option>kelas1</option>
          <option>kelas2</option>
          <option>kelas3</option>
        </select></td>
    </tr>
    <tr>
      <td align="left" valign="top">Avatar</td>
      <td align="left" valign="top"><label for="select6"></label>
        <select name="avatar" id="select6">
          <option>../avatar/admin.png</option>
          <option>../avatar/guru.png</option>
          <option>../avatar/siswa.png</option>
        </select> </td>
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
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><span class="putih">
        <input name="input" type="submit" value="Tambah User" />
      </span></td>
    </tr>
  </table>
</form>
</div>
<table width="176" height="46" border="1" align="center">
  <tr>
    <th bgcolor="#FFFFFF" width="80" height="40" scope="col"><div align="center"><a href="../index/index.php"><img src="../images/home.png" alt="home" width="81" height="74" />Home</a></div>
      <div align="center"></div></th>
    <th bgcolor="#FFFFFF" width="80" scope="col"><form action="" method="post" name="form10" id="form10">
      <a href="../logout.php"><img src="../images/log_off.png" alt="home" width="78" height="74" />Keluar
      </a>
    </form></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>