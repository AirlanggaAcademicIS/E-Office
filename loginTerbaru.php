<table width="1357" border="0">
  <tr>
    <td width="50%"><img src="Woffice2.png" width="400" height="200"></td>
      <br>
    <td width="100%">
    
      <form action="" method="post">
        <p><strong>LOGIN</strong></p>
        <p>
          <input type="text" name="Nip" placeholder="Masukan NIP">
              </p>
        <p>
          <input type="password" name="Password" placeholder="Masukan Password">
          </p>
		  <font color="#FF0000">
              <script>
function myFunction() {
    location.replace("http://www.w3schools.com")
}
</script>
<?php
session_start();
include 'koneksi.php';
 
if(!empty($_POST)){
     
    $Nip = $_POST['Nip'];
    $Password = $_POST['Password'];
 
    $sql = "select * from pegawai where Nip='".$Nip."' and Password='".$Password."'";
    #echo $sql."<br />";
    $query = mysql_query($sql) or die (mysql_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysql_num_rows($query);
         
        $data = mysql_fetch_array ($query);
        $Pengguna=$data[2];
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['Nip']=$Nip;
            $stringLocation="Location: home.php?pengguna=".$Pengguna;
              header("$stringLocation");
            
        }else{
            echo "username atau password salah";
        
    }}
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
    </td>
  </tr>
 
</table>