
<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
	exit();
	}

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
}
	include "config.php";
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$username'"));
	$query2=mysql_fetch_array(mysql_query("select * from tabel_topik_ipa1 where pengirim='$username'"));

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Css/header.css" rel="stylesheet" type="text/css" />
<link href="Css/tulisan.css" rel="stylesheet" type="text/css" />
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
	<img src="Menu/Forum_up.png">
</div>
<div id="tulisan">
       <form id="frm-mhs" name="form1" method="post" action="updatepass.php">
  <div align="center">
    <table width="493" height="152" border="1" align="center">
      <tr>
              <td colspan="2"><div align="center">
                <input type="hidden" name="username" value="<?php echo $username?>"/>
                <strong class="merah1">
                  <?php 
			  
			  
			  if(isset($_GET['status'])){
				  $status = $_GET['status'];
				  }
			   else{
				   $status = "";
				   }
			  
			  echo "$status";
			  
			  
			  ?>
                </strong></div></td>
            </tr>
<tr>
  <td width="139" height="27" align="left" valign="top"><strong>Password</strong></td>
  <td width="338" align="left" valign="top"><p class="hitam"><strong>:</strong>
    <input name="password" type="password" id="password1" size="20"/>
    </p></td>
</tr>
    <tr>
      <td height="27" align="left" valign="top"><strong>Retype Password </strong></td>
      <td align="left" valign="top"><span class="hitam">
        <strong>:</strong>
        <input name="password2" type="password" id="password2" size="20"/>
      </span></td>
    </tr>
            <tr>
              <td height="48">&nbsp;</td>
              <td><input type="submit" value="Update Password !" /></td>
            </tr>
          </table>
        </form>
      <tr>
        <th height="97" colspan="2" scope="row"><table width="472" height="112" border="1" align="center">
          <tr>
            <th width="153" height="106" scope="col"><div align="center">
              <p><a href="index/index.php"><img src="images/home.png" alt="d" width="80" height="80" /></a></p>
              <p><a href="index/index.php">Home</a></p>
            </div></th>
            <th width="167" scope="col"><div align="center">
              <p><a href="logout.php"><img src="images/log_off.png" alt="d" width="80" height="80" /></a></p>
              <p><a href="logout.php">Keluar</a></p>
            </div></th>
          </tr>
        </table></th>
      </tr>
      </div>
</body>
</html>