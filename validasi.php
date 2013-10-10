<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo</title>
</head>

<body>
<p>
  <?PHP
$nama=$_POST['ahmad'];
$pass=$_POST['pass'];
if ($nama=="achmad" && $pass=="123"){
	echo '<p> login berhasil</p>';
	include ("web.php");}
else {
	echo '<p> login gagal </p>';
	include ("loginphp.php");}	
?>
<p style=" color:#03F">
</body>
</html>