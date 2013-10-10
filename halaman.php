<html>
<head><title>Halaman Website</title>
</head>
<body bgcolor="#33CCFF">
<?php
session_start();
$nama=$_POST['nama'];
$pass=$_POST['pass'];
?>
<div> Nama Pengguna :</label>
<div><?php echo ($nama);?></div></div>
<marquee>
selamat datang</marquee>
</body>
</html>
