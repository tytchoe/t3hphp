<?php

    echo 'bai 4 ';
    echo '<br>';

    $arr_product = [
        'a','b','c','d'
    ];
//    print_r($arr_product);
    echo '<br>';
    var_dump($arr_product);

    $str_product = json_encode($arr_product);
    echo '<br>';
    var_dump($str_product);


    echo count($arr_product);
    echo '<br>';

    if (is_array($arr_product)){
        echo 'array';
    }else{
        echo 'not array';
    }

    // thêm phần tử vào mảng
    // cách 1
    $arr_product[] = 'e';
    print_r($arr_product);
    echo '<br>';
    // cách 2
    array_push($arr_product,'f');
    print_r($arr_product);
    echo '<br>';

    // làm tròn số
    echo round(pi());
    echo '<br>';

    // hàm chuỗi
    $arr_str = 't3h buoi 4';
    echo trim(' t3h buoi 4',' ');
    echo '<br>';

    echo substr('t3h buoi 4',0,3);
    echo '<br>';

    echo str_replace('buoi 4','15/05',$arr_str);
    echo '<br>';

//    echo strpos('');

    echo strlen($arr_str);
    echo '<br>';

?>

