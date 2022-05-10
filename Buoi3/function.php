<?php
    function show_name(){
        echo 'hello world'.'<br>';
    }
    show_name();

    function show_name_var($param){
        echo $param.'<br>';
    }
    show_name_var('hello world 2');

    function show_full_name($name, $age, $address = 'HN'){
        echo "Ten : $name , tuoi : $age , dia chi : $address ".'<br>';
    }
    show_full_name('dung','20','px');
    show_full_name('dung','20');


    function sum($a , $b){
        return $a + $b;
    }
    $c = sum(3,5);
    echo "$c".'<br>';

    $a = ' T3H';
    var_dump($a);
    $b = trim("$a");
    var_dump($b);

    $str ='trung tam t3h';
    $d = explode(' ',$str);
    print_r($d);

    $e = implode(' ', $d);
    print_r($e)


?>
