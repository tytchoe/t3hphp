<?php
//    $name = "Dung do hoi";
//    $day = 5;
//    $month = 8;
//    $address = "Phu Xuyen";
//    $info = "$name $day $month $address";
//    echo $info;
//
//    $x = 5;
//    $y = '5';
//
//    if ($x == $y){
//        echo 'Bang nhau 1';
//    }
//    if ($x === $y){
//        echo 'Bang nhau 2';
//    }
//    $a = true;
//    $b = false;
//    if ($a){
//        echo $a;
//    }else{
//        echo 'not a';
//    }
//
//    if ($b){
//        echo $b;
//    }else{
//        echo 'not b';
//    }
//
//    $a = 5;
//    $b = '5';
//    echo $a++;
//    echo $a;
//    echo ++$a;
//
//    switch ($a){
//        case 5:
//            echo 'th1';
//            break;
//        case 6:
//            echo 'th2';
//            break;
//        default:
//            echo 'none';
//    }
//
//    while($a <10){
//        echo "$a <br />";
//        $a++;
//    }

//kiểu dữ liệu mảng
//
//    $arr_Products = array();
//    $arrNumbers = [1,2,3,4,5];
//    $arr_Numbers = ['a','b','c'];
//    print_r($arrProducts);
//
//    echo '<pre>';
//    print_r($arrNumbers);
//
//    var_dump($arrNumbers);
//    echo $arr_Numbers;
//    die;
//    exit();
//    echo 'Hello world';
//    echo '<pre>';


$arrProducts = [
    [
        'id' => 1,
        'name' => 'Samsung',
        'price' => '20000000'
    ],
    [
        'id' => 2,
        'name' => 'Xiaomi',
        'price' => '15000000'
    ],
    [
        'id' => 3,
        'name' => 'Iphone',
        'price' => '25000000'
    ]
];
//    echo '<pre>';
//    foreach($arrProducts as $item){
//        print_r($item);
//    }

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php
    /*        foreach ($arrProducts as $item){
        */?><!--
    <tr>
        <td><?/*= $item['id'] */?></td>
        <td><?/*= $item['name'] */?></td>
        <td><?/*= $item['price'] */?></td>
    </tr>
    --><?php
    /*        }
        */?>
    <?php foreach ($arrProducts as $item): ?>
        <?php if($item['price'] >= 20000000): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['price'] ?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>


</table>

</body>
</html>
