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

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "
    <li> <a href='#'><img src='" . $row['img'] . "' width='235' height='275' /></a>
        <div class='product-info'>
            <h3>" . $row['itmName'] . "</h3>
            <div class='product-desc'>
                <h4>" . $row['itmCat'] . "</h4>
                <p>" . $row['itmDesc'] . "</p>
                <strong class='price'>$" . $row['price'] . ".00</strong> <button class='to-cart' value=" . $row['id'] . " onclick='removeItem(this.value)'>Remove From Cart</button> </div>
        </div>
    </li>
    ";
    }
}

?>