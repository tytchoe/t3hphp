<?php

    session_start();

    $_SESSION['user'] = 'T3H';
    $_SESSION['email'] = 't3h@gmail.com';
    $_SESSION['number'] = 1;

//    unset($_SESSION['user']);
//    if (isset($_SESSION['user'])){
//        print_r($_SESSION['user']);
//    }

    if (isset($_SESSION['number'])){
        print_r($_SESSION['number']);
        
    }

?>

<html lang ='vi'>
    <head>

    </head>
    <body>
        <h1>Buoi 5</h1>
        <a href="page1.php">Trang 1</a>
        <a href="page2.php">Trang 2</a>
    </body>
</html>


