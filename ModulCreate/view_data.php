<html>
<head>
    <title>View Data Mahasiswa</title>
</head>
<body>
    
<font size="4"><center><b>DATA MAHASISWA</b></center><font>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFA600" height="40">
            <th width="5%">No</th>&nbsp;
            <th width="14%">NIM</th>&nbsp;
            <th width="12%">Nama</th>&nbsp;  
            <th width="25%">Jurusan</th>&nbsp; 
            <th width="30%">Alamat</th>&nbsp;        
            <th width="14%">Telepon</th>&nbsp;    
        </tr>
    <?php
        include "koneksi.php";
        //view data mahasiswa di dalam database
        $Lihat="SELECT * FROM mahasiswa ORDER BY id_mahasiswa";
        $Tampil = mysql_query($Lihat);
        $nomer=0;
        while (    $hasil = mysql_fetch_array ($Tampil)) {
                $id_mahasiswa    = stripslashes ($hasil['id_mahasiswa']);
                $nama            = stripslashes ($hasil['nama']);
                $jurusan        = stripslashes ($hasil['jurusan']);
                $alamat            = stripslashes ($hasil['alamat']);
                $telepon        = stripslashes ($hasil['telepon']);
            {
        $nomer++;
    ?>
        <tr bgcolor="#DFE6EF">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr align="center" height="40">
            <td><?=$nomer?><div align="center"></div></td>
            <td><?=$id_mahasiswa?><div align="center"></div></td>
            <td><?=$nama?><div align="center"></div></td>
            <td><?=$jurusan?><div align="center"></div></td>
            <td><?=$alamat?><div align="center"></div></td>
            <td><?=$telepon?><div align="center"></div></td>
        </tr>
        <tr bgcolor="#DFE6EF">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    <?php 
            }
        }
    //Tutup koneksi engine MySQL
        mysql_close($Open);
    ?>
    </table>
</body>
</html>