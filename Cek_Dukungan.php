<?php

if (isset ($_GET['q']) && $_GET['q'] == 1) {
  
	if (isset($_COOKIE['test'])) {
		echo 'support';
		} else {
		echo 'tidak support';
		}
}else{
	setcookie('test','value');
	$self = $_SERVER ['PHP SELF'];
	//men set nilai cookie
	header ('Location:'.$self.'?q=l');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cek Dukungan</title>
</head>

<body>

<p>
Tekan Refresh (F5);

</body>
</html>
