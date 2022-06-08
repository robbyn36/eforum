<?php
error_reporting(0);
session_start();
if (isset($_SESSION['kelas']))
{
	// jika level admin
	if ($_SESSION['kelas'] == "kelas1")
   {   
   	header('location:batas.php');
   }
   else if ($_SESSION['kelas'] == "kelas3")
   {   
   	header('location:batas.php');
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else 
   {
       
   }
}

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

<body  bgcolor="#76c8f4">
<div id="header">
	<img src="../Menu/Forum_up.png" />
</div>
<div id="tulisan" bgcolor="#FFFFFF">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="569" height="424" border="1">
      <tr>
        <th scope="col"><h2>Kelas 2</h2></th>
      </tr>
     <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="ips/index2ips.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','../images/imagekelas/ips2.PNG',1)"><img src="../images/imagekelas/ips.PNG" width="41" height="31" id="Image6" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="ipa/index2ipa.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','../images/imagekelas/ipa2.PNG',1)"><img src="../images/imagekelas/ipa.PNG" width="41" height="32" id="Image7" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="pkn/index2pkn.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','../images/imagekelas/pkn2.PNG',1)"><img src="../images/imagekelas/pkn.PNG" width="49" height="28" id="Image8" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="mtk/index2mtk.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','../images/imagekelas/mtk2.PNG',1)"><img src="../images/imagekelas/mtk.PNG" width="49" height="31" id="Image9" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="bindo/index2bindo.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','../images/imagekelas/bindo2.PNG',1)"><img src="../images/imagekelas/bindo.PNG" width="119" height="32" id="Image10" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="bing/index2bing.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','../images/imagekelas/bing2.PNG',1)"><img src="../images/imagekelas/bing.PNG" width="105" height="30" id="Image11" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="kesenian/index2seni.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','../images/imagekelas/seni2.PNG',1)"><img src="../images/imagekelas/seni.PNG" width="128" height="32" id="Image12" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><a href="olahraga/index2olahraga.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','../images/imagekelas/olahraga2.PNG',1)"><img src="../images/imagekelas/olahraga.PNG" width="97" height="32" id="Image13" /></a></th>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><table width="467" height="118" border="1" align="center">
          <tr>
            <th width="98" height="112" scope="col"><div align="center">
              <p><a href="../index/index.php"><img src="../images/home.png" alt="home" width="80" height="70" />Home</a></p>
            </div>
              <div align="center"></div></th>
            <th width="116" scope="col"><div align="center">
              <p><a href="../profil.php"><img src="../images/profil.png" alt="home" width="80" height="70" /><br />Profil</a></p>
            </div></th>
            <th width="124" scope="col"><div align="center">
              <p><a href="../gantipass.php"><img src="../images/changepass.jpg" alt="home" width="84" height="83" /></a><a href="../gantipass.php"><br />Ganti Password</a></p>
            </div></th>
            <th width="101" scope="col"><div align="center">
              <p><a href="../logout.php"><img src="../images/log_off.png" alt="home" width="80" height="70" />Keluar</a></p>
            </div></th>
          </tr>
        </table></th>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
</form>
</div>
</body>
</html>