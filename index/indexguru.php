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
/*	$query2=mysql_fetch_array(mysql_query("select * from tabel_topik where pengirim='$username'"));*/
	
//Mengambil nama informasi user
	$user=$_SESSION['username'];
	$query=mysql_fetch_array(mysql_query("select * from tabel_member where username='$user'"));
	$nama_lengkap = $query['nama_lengkap'];
	$namauser = $query['username'];
	$tanggal_daftar = $query['tanggal_daftar'];
	$jenis_kelamin  = $query['jenis_kelamin'];
	$avatar			= $query['avatar'];
	$situs_web		= $query['situs_web'];
	$email			=$query['email'];
	$point			=$query['point'];

	
/*$id_topik = $_GET['id_topik'];
$query6=mysql_fetch_array(mysql_query("select dilihat from tabel_topik where id_topik='$id_topik'"));
$dilihat = $query6 ['dilihat'] + 1;
$sql2 = "UPDATE tabel_topik SET dilihat='$dilihat' WHERE id_topik='$id_topik'";
$hasil2 = mysql_query($sql2, $koneksi);*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Css/header.css" rel="stylesheet" type="text/css" />
<link href="../Css/tulisan.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-weight: bold;
	font-style: italic;
}
.gg {
	color: #FFF;
}
.head {
	color:#FFF;
}

#form1 table tr th table tr th table tr th em {
	font-size: 12px;
}
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body bgcolor="#76c8f4" onload="MM_preloadImages('../Menu/Kelas1_up.png','../Menu/Kelas-2_up.png','../Menu/Kelas-3_up.png')">
<div id="header">
	<img src="../Menu/Forum_up.png" />
</div>
<div id="tulisan">
  <table width="900" height="483" border="0" align="center">
    <tr class="head1">
      <th colspan="2" rowspan="2" bgcolor="#FFFFFF" scope="col">Data User
        <p><img src="<?php echo $avatar ?>" alt="" width="180" height="220" /></p>
        <p>Anda Login Sebagai :<?php echo $_SESSION['username']; echo " &nbsp;"?></p></th>
      <th width="183" height="63" bgcolor="#FFFFFF" scope="col"><a href="../kelas1/kelas1.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','../Menu/Kelas1_up.png',1)"><img src="../Menu/Kelas1.png" width="142" height="57" id="Image7" /></a></th>
      <th width="183" height="63" bgcolor="#FFFFFF" scope="col"><a href="../kelas2/kelas2.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','../Menu/Kelas-2_up.png',1)"><img src="../Menu/Kelas-2.png" width="142" height="57" id="Image8" /></a></th>
      <th width="183" height="63" bgcolor="#FFFFFF" scope="col"><a href="../kelas3/kelas3.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','../Menu/Kelas-3_up.png',1)"><img src="../Menu/Kelas-3.png" width="142" height="57" id="Image9" /></a></th>
    </tr>
    <tr>
      <td height="323" colspan="3" bgcolor="#FFFFFF"><img src="../images/forum.PNG" width="559" height="319" alt="ff" /></td>
    </tr>
    <tr>
      <th height="77" colspan="5" bgcolor="#FFFFFF" scope="row"><table width="351" height="79" border="1" align="right">
        <tr>
          <th width="95" height="73" scope="col"><div align="center"><a href="../profil.php?username=<?php echo $username ?>"><img src="../images/home.png" alt="profil" width="50" height="50" /><br />
            Profil</a></div></th>
          <th width="127" scope="col"><div align="center"><a href="../gantipass.php"><img src="../images/changepass.jpg" width="50" height="50" alt="pass" /><br />
            Ganti Password</a></div></th>
          <th width="107" scope="col"><div align="center"><a href="../logout.php"><img src="../images/log_off.png" width="50" height="50" alt="exit" /><br />
            Keluar</a></div></th>
        </tr>
      </table></th>
    </tr>
  </table>
</div>
</body>
</html>