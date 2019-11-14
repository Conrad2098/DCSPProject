<?php

$conn = new mysqli("localhost", "root", "", "netid");
if ($conn->connect_error){
    die($conn->connect_error);
}

$string = $_REQUEST["p"];
$total = 0.0;


for($i = 0; $i < strlen($string) / 5; $i++){
    $singleItem = substr($string, $i*5, 5);

    $query = "SELECT * FROM products WHERE id = " . $singleItem . ";";
    $result = $conn->query($query);
    if(!$result){
        die($conn->error);
    }

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $total = $total + (int)$row["price"];
    }

}
echo $total;


?>