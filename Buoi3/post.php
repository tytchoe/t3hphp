<?php
if (isset($_POST['name'])){
    $name = $_POST['name'];
    print_r($name);
}
if (isset($_POST['pass'])){
    $pass = $_POST['pass'];
    if (strlen($pass)<8){
        $err_pass = 'do dai toi thieu la 8';
//        print_r('do dai toi thieu la 8');
    }
    print_r($pass);
}



?>


<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms Post</h2>

<form action="" method="post">
    <label for="name">Username:</label><br>
    <input type="text" id="name" name="name" value=""><br>
    <label for="pass">Password:</label><br>
    <input type="text" id="pass" name="pass" value=""><br><br>
    <?php if(!empty($err_pass)): ?>
        <p style="color: red"><?= $err_pass ?></p>
    <?php endif; ?>
    <input type="submit" value="Submit">
</form>
</body>
</html>
