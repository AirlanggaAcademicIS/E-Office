<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
<table width="1077" border="1">
  <tr>
    <td width="646"><img src="../1.jpg" width="646" height="534" /></td>
    <td width="415"><div align="center">
      <p><strong>LOGIN</strong></p>
      <p>
        <label>
        <input type="text" name="Username" />
        </label>
      </p>
      <form id="form1" name="form1" method="get" action="">
        <label>
          <input type="password" name="Password" />
          </label>
        <p>&nbsp;</p>
      </form>
      <form id="form2" name="form2" method="post" action="home.html">
        <label>
          <input type="submit" name="Submit" value="Masuk" />
          </label>
        
        </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  
  <?php
session_start();
 
if(isset($_POST['Masuk'])){


include ("koneksi.php");
$Username=$_GET['Username'];
$Password=$_GET['Password'];

$qry="SELECT Masuk FROM karyawan WHERE Username ='$Username'"; 
$result=mysql_query($qry);

$count=mysql_num_rows($result);

if($count==0){
	die("Pasword was probably incorect");
	}
else if{$count==1){
$_SESSION['login']=$login;
header("location:index.php";
}
else {
	echo "Wrong Username or Password";
	}
	}
	mysql_close($bdd);
?>

</table>


</body>

</html>
