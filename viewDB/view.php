 <?      

  $host = localhost;// alamat atau host     
  $user = root; // username       
  $pass = ""; // password       
       
 $koneksi = mysql_connect("$host","user",$pass);   
       
 mysql_select_db("ikc",$koneksi);     
       
  $query = mysql_query("select * from pengunjung",$koneksi); 
       
  $jumlah = mysql_num_rows($query);     
       
  echo "<center>Daftar Pengunjung</center>";   
  echo "Jumlah pengunjung : $jumlah";     
 
while($baris 
=mysql_fetch_array($query))    
 {      
 echo "<br>";     
 echo $baris[0];     
 echo "<br>";     
  echo "Nama : ";         
 echo $baris[1];     
 echo "<br>";     
  echo "Email : ";         
 echo $baris[2];     
 echo "<br>";     
 
echo "Homepage : 
";      
 echo $baris[3];     
 }      
  