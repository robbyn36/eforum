<?php
include ('koneksi.php');
$id=$_GET['id'];
$query_string="select * from db_eforumv2"; // mendiskripsikan bahwa mengambil dari database "artikel"
$query=mysql_query($query_string);
while($record=mysql_fetch_array($query))
{ ?><table width="500" border="0">
<tr>
<td width="100"><?php echo " $record[nama] "; ?> </td>
<td width="100"><?php echo " $record[nama] "; ?> </td>
<td width="100"> <?php echo " $record[nama] "; ?> </td>
<td width="100">
<?php $id=$_GET['id'];// mendiskripsikan alamat setelah tombol submit ter-klik
echo "<form action=hapus2.php?id=$record[id] method=post name=form1 target=_self>"; ?>
<label>
<input type="submit" name="Submit" value="Submit">
</label></td>
</tr>
</table>
</form>

<?php } ?>