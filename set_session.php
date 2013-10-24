<?php

//inisialsai data session
session_start();

//Set seesion jika belum ada
if (!isset($_SESSION['test'])){
	$_SESSION['test'] = 'Value';
	
}	else {
	echo 'Session di set <br />';
	//Mencetak nilai session test
	echo 'Nilai: ' .$_SESSION['test'].'<br />';
	
	//mencetak semua element session
	print_r($_SESSION);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Set Session</title>
</head>
<p>
Tekan Refresh (F5);
<body>




</body>
</html>
