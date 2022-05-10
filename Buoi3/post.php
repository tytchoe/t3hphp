<?php
if (isset($_POST['fname'])){
    $fname = $_POST['fname'];
    print_r($fname);
}
if (isset($_POST['lname'])){
    $lname = $_POST['lname'];
    print_r($lname);
}



?>


<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms Post</h2>

<form action="" method="post">
    <label for="fname">Username:</label><br>
    <input type="text" id="fname" name="fname" value=""><br>
    <label for="lname">Password:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
