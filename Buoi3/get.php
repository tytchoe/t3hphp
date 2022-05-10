<?php
    if (isset($_GET['fname'])){
        $fname = $_GET['fname'];
        print_r($fname);
    }
    if (isset($_GET['lname'])){
        $lname = $_GET['lname'];
        print_r($lname);
    }



?>


<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="Get">
    <label for="fname">Username:</label><br>
    <input type="text" id="fname" name="fname" value=""><br>
    <label for="lname">Password:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
