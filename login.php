<table width="1357" border="0">
  <tr>
    <td width="50%"><img src="../1.jpg" width="646" height="534"></td>
    <td width="50%"><div align="center">
      <form action="" method="post">
        <p><strong>LOGIN</strong></p>
        <p>
          <input type="text" name="username" placeholder="Username">
              </p>
        <p>
          <input type="password" name="password" placeholder="Password">
          </p>
		  <font color="#FF0000">
<?php
session_start();
include 'koneksi.php';
 
if(!empty($_POST)){
     
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "select * from signup where username='".$username."' and password='".$password."'";
    #echo $sql."<br />";
    $query = mysql_query($sql) or die (mysql_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysql_num_rows($query);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            header('Location: index.php');
        }else{
            echo "username atau password salah";
        }
    }
}
?>
</font>
        <p>
          <input type="submit" value="login">
                        </p>
      </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
 
</table>