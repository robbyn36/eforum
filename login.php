<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="Css/login.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#76c8f4">
<div id="header">
	<img src="Menu/Forum_up.png" width="900" height="229" >
 </div>
<div id="formlogin">
<form id="form1" name="form1" method="post" action="proseslogin.php">
          <p><strong class="putih"> Login</strong><br />   
            <span class="merah"><strong>
            
            <?php  
			  if(isset($_GET['status'])){
				  $status = $_GET['status'];
				  }
			   else{
				   $status = "";
				   }
			  
			  echo "<blink>$status</blink>";
			  
			  
			  ?>
          </p>
    <table>
        <tr>
          <th bgcolor="#FFFFFF" width="134" scope="col" align="left">ID</th>
          <th bgcolor="#FFFFFF" width="300" colspan="5" scope="col"><label for="id"></label>
          <input name="username" type="text" id="id" /></th>
        </tr>
        <tr>
        	<th bgcolor="#FFFFFF"scope="col" align="left">Password</th>
       		<th bgcolor="#FFFFFF" colspan="5"><label for="password"></label>
              <input name="password" type="password" id="password" />
        </tr>


      <div id="tombol">
      <tr>
        <th colspan="2" align="right"><input type="submit" name="login" id="login" value="Submit" align="right"/></th>
        </tr>
      </div>
   </table>
   <p>&nbsp;</p>
  </form>
</div>
</body>
</html>