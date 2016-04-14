<?php
 	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_nama = "ivent";
	$koneksi = mysql_connect($db_host, $db_user, $db_password) or die ("gagal konek");
	$koneksi_db = mysql_select_db($db_nama)or die ("database tidak ditemukan");
		
?>
