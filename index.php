<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Coba Autentitikasi Session</title>
<style type="text/css">
.inner{
margin:200px auto; padding:20px; width:240px; border:1px;}
</style>
</head>
<body>
<p>
  <?php
ini_set('display_errors', 1);
define('_VALID', 1);
//include file eksternal
require_once('./auth.php');
init_login();
validate();
?>
</p>
<p align="right"><a href="?m=logout">Logout</a></p>
<br/>
<h3 align="center">Halaman Session</h3>
<p align="center">
<a href="?m=logout"> Logout </a>
<p align="center">
aelamat datang
</body>
</html>