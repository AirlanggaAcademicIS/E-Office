<?php
    include "koneksi.php";
    //Kirimkan Variabel
    $id_mahasiswa    = $_POST['id_mahasiswa'];
    $nama            = $_POST['nama'];
    $jurusan        = $_POST['jurusan'];
    $alamat            = $_POST['alamat'];
    $telepon        = $_POST['telepon'];
    //validasi id mahasiswa dalam database
    $cek=mysql_num_rows (mysql_query("SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa='$_POST[id_mahasiswa]'"));
    if ($cek > 0) {
    ?>
        <script language="JavaScript">
            alert('ID Mahasiswa sudah dipakai !, silahkan diulang kembali');
            document.location='index.php';
        </script>
    <?php
    }
    //input data ke table mahasiswa dalam database akademik
    $input    ="INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon)
            VALUES ('$id_mahasiswa','$nama','$jurusan','$alamat','$telepon')";
    $query_input =mysql_query($input);
        if ($query_input) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
            alert('Data Mahasiswa Berhasil diinput!');
            document.location='index.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Data Mahasiswa Gagal diinput, Silahkan diulangi!";
    }
    //Tutup koneksi engine MySQL
    mysql_close($Open);
?>