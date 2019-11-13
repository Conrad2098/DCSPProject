<?php

$conn = new mysqli("localhost", "root", "", "netid");
if ($conn->connect_error){
    die($conn->connect_error);
}

$string = $_REQUEST["q"];

for($i = 0; $i < strlen($string) / 3; $i++){
    $singleItem = substr($string, $i*3, 3);

    $query = "SELECT * FROM products WHERE id = " . $singleItem . ";";
    $result = $conn->query($query);
    if(!$result){
        die($conn->error);
    }

    $total = 0.0;

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $total = $total + (int)$row["price"];
    }


}

?>