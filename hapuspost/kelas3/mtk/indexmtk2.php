<?php
include "koneksi.php";
?>
<html>
<head>
	<link href="../../Css/header.css" rel="stylesheet" type="text/css" />
	<link href="../../Css/tulisan.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.satu {
	color: #CCC;
}
.lll {
	color: #FF0;
}
.lll {
	font-family: Arial, Helvetica, sans-serif;
}

#form2 div {
	font-size: 12px;
}
#form2 div {
	font-size: 16px;
}
</style>
</head>
<body bgcolor="#ffffff">
	<div id="header">
    <IMG src="../../../Menu/Forum_up.png" />
    </div>
<div id="tulisan">
  <form name="form1" method="post" action="">
    <div align="center"><strong>MTK Kelas 3</strong></div>
  </form>
  <table width="67%" height="63" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr class="fontt">
      <th width="4%" height="21" bgcolor="#00CCFF"><div align="left">#</div></th>
      <th width="48%" bgcolor="#00CCFF">Topik</th>
      <th width="14%" bgcolor="#00CCFF">Pengirim</th>
      <th width="23%" bgcolor="#00CCFF">Tanggal</th>
      <th width="11%" bgcolor="#00CCFF">Action</th>
    </tr>
    <?php
$nomor=1;
$result = mysql_query("select * from tabel_topik_mtk3 ORDER by tanggal DESC ");
while($data=mysql_fetch_array($result)){?>
    <tr>
      <td height="40"><?php echo $nomor++;  ?></td>
      <td><form id="form2" name="form2" method="post" action="">
        <div align="left"><?php echo $data['topik']?></div>
      </form></td>
      <td><form id="form3" name="form3" method="post" action="">
        <div align="center"><?php echo $data['pengirim']?></div>
      </form></td>
      <td><form name="form4" method="post" action="">
        <div align="center"><?php echo $data['tanggal']?> </div>
      </form></td>
      <td><a href="update.php?u=<?php echo $data['id_member']?>"></a>
        <form name="form9" method="post" action="">
          <div align="center"> <a href="delete.php?d=<?php echo $data['id_topik']?>"onclick="return confirm('Are you sure you want to delete?')">hapus</a><br/>
            <a href="delete.php?d=<?php echo $data['id_member']?>"onclick="return confirm('Are you sure you want to delete?')"></a></div>
        </form></td>
    </tr>
    <?php
}
?>
  </table>
</div>
</body>
</html>