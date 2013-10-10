<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function val(){
var x=document.forms["myForm"]["nama"].value;
var y=document.forms["myForm"]["pass"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Username atau Password Belum diinsi");
  myForm.nama.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ('Username Dan Password harus dalam huruf..!!');
	return false;
}}
</script>
</head>
<body bgcolor="#A0DBFA">
<?php  
session_start();    
?>  
<div id="apDiv1" align="left">
    <label>Login</label>
  <hr align="center" width="300" size="5" color="#00CCFF">
  </div>
<div id="apDiv2" align="left">
   <form name="myForm" method="POST" action="validasi.php" onSubmit="return val()">
    <label>Username :</label>
    <br>
    <input type="text" name="nama" id="nama" width="200" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
    <br><br>
    <label>Password :</label>
    <br>
    <input type="password" name="pass" id="pass" width="200">
    <br><br>
    <input type="submit" name="Login" value="Login">
    <input type="reset" name="Reset" value="Reset">
  </form>
</div>
</body>
</html>
