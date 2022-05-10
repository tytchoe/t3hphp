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
    echo "$c";
?>
