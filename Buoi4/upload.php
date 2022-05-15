<?php
    if (isset($_FILES['fileToUpload'])){
        echo '<pre>';
        var_dump($_FILES['fileToUpload']);
        print_r($_FILES['fileToUpload']['name']);
        $file_tmp_name = $_FILES['fileToUpload']['tmp_name'];

        move_uploaded_file($file_tmp_name , );
    }else {
        echo 'not image';
    }
?>
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>