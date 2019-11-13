<?php
$conn = new mysqli("localhost", "root", "", "netid");
if ($conn->connect_error){
    die($conn->connect_error);
}

$val = $_REQUEST["q"];
$col = $_REQUEST["search"];

if($col === 'itmName'){
    $query = "SELECT * FROM products WHERE " . $col . " LIKE '%" . $val . "%';";
    $result = $conn->query($query);
    if(!$result){
        die($conn->error);
    }
}else{
    $query = "SELECT * FROM products WHERE " . $col . " = '" . $val . "';";
    $result = $conn->query($query);
    if(!$result){
        die($conn->error);
    }
}

if(mysqli_num_rows($result) != 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "
        <li> <a href='#'><img src='" . $row['img'] . "' width='235' height='275' /></a>
            <div class='product-info'>
                <h3>" . $row['itmName'] . "</h3>
                <div class='product-desc'>
                    <h4>" . $row['itmCat'] . "</h4>
                    <p>" . $row['itmDesc'] . "</p>
                    <strong class='price'>$" . $row['price'] . ".00</strong> <button class='to-cart' value=" . $row['id'] . " onclick='addToCart(this.value)'>Add To Cart</button> </div>
            </div>
        </li>
        ";
    }
}else{
    echo "<br><br><br><h1 style='padding-left:30px'>No Items Matching Search</h1>";
}

?>