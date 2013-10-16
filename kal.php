<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Kalkulator</title>
</head>
<body>
<body bgcolor="black" text="white">
<!-- form untuk menggunakan metode post-->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Kalkulator
	<input type="integer" name="bil1" placeholder="bil1" value="<?php echo $_POST['bil1']; ?>" required="required" />
		<!--pilihan menu operasi untuk mwmilih-->
		<select name="perhitungan">
			<option value="+"<?php if($_POST['perhitungan']=='+') echo"selected"; ?>>+</option>
			<option value="-"<?php if($_POST['perhitungan']=='-') echo"selected"; ?>>-</option>
			<option value="x"<?php if($_POST['perhitungan']=='x') echo"selected"; ?>>x</option>
			<option value=":"<?php if($_POST['perhitungan']==':') echo"selected"; ?>>:</option>
		</select>
		<input type="integer" name="bil2" placeholder="bil2" value="<?php echo $_POST['bil2']; ?>" required="required" />
		<input type="submit" value="=" />

<!-- pemanggilan method post-->
<?php
			// pemakaian kondisi if menentukan mana yang akan di jalankan
			if(isset($_POST['bil1']) && isset($_POST['bil2'])){
				if($_POST['perhitungan']=='+') $hasil=$_POST['bil1'] + $_POST['bil2'];
				else if($_POST['perhitungan']=='-') $hasil=$_POST['bil1'] - $_POST['bil1'];
				else if($_POST['perhitungan']=='x') $hasil=$_POST['bil1'] * $_POST['bil2'];
				else if($_POST['perhitungan']==':') $hasil=$_POST['bil1'] / $_POST['bil2'];
				}
?>
		<input type="integer" name="hasil" value="<?php echo $hasil;?>" readonly="readonly">
</form>
</body>
</html>