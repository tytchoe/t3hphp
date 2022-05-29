<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbanhang";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT into brands (`name`,slug,position,is_active)
VALUES ('t3h','t3h',1,1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "webbanhang";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT id, name  FROM products LIMIT 10";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while ($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}
//$conn->close();


?>