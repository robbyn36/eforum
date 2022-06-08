<?php
include ('koneksi.php');
if ($_POST['Submit'])
{ 
$id=$_GET['id'];
mysql_query("delete from tabel_member where id=$id");
} 
?>
<script language="javascript"> alert("data anda telah terhapus");
document.location='<?php echo ("index.php"); ?>';</script>