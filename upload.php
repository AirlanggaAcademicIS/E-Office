<?
    $upload_path = "upload/";
    if (!is_dir($upload_path)) {
        mkdir($upload_path);
    } 
    if (isset($_POST['btnUpload'])) { 
        $file = $_FILES['upload-file']['name'];
        $tmp  = $_FILES['upload-file']['tmp_name'];
        if ((isset($file)) && ($file != "")) { 
            $uploadfile = (file_exists($upload_path.$file)) ? $upload_path." copy of ".$file : $upload_path.$file;
            move_uploaded_file($tmp, $uploadfile);
            if (chmod($uploadfile, 0775)) {
                echo "Sukses mengupload file";
            } else {
                echo "Gagal mengupload file";
            }
        }
    }
?>
<FORM method="post" enctype='multipart/form-data'><input type="file" name="upload-file"><input type="submit" name="btnUpload" value="Upload">
</FORM>