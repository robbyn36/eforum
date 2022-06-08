<html>
<body>
<?php 

$_SESSION['username'] = "";
unset($_SESSION['username']);

print "<script>alert('Logout berhasil'); location = 'login.php'; </script>";

?>
</body>
</html>