<?php

$type = $_REQUEST["t"];

if($type == "createAdmin"){
    $user = $_REQUEST["u"];
    $pass = $_REQUEST["p"];

    $conn = new mysqli('localhost', 'root', '', 'netid');
    if ($conn->connect_error){
        die($conn->connect_error);
    }

    $num = rand(10000, 99999);

    $query = "INSERT INTO users(userID, username, pass, isAdmin) VALUES($num, '" . $user . "', '" . $pass . "', true);";
    $conn->query($query);

    $query = "SELECT * FROM users WHERE username = '" . $user . "' AND pass = '" . $pass . "' LIMIT 1;";
    $results = $conn->query($query);

    if(mysqli_num_rows($results) == 0){
        echo mysqli_num_rows($results);
    }else{
        echo "Yeet";
    }

}else if($type == "remove"){

    $user = $_REQUEST["u"];

    $conn = new mysqli('localhost', 'root', '', 'netid');
    if ($conn->connect_error){
        die($conn->connect_error);
    }

    $query = "DELETE FROM users WHERE username = '" . $user . "';";
    $conn->query($query);

    $query = "SELECT * FROM users WHERE username = '" . $user . "' LIMIT 1;";
    $results = $conn->query($query);

    if(mysqli_num_rows($results) == 0){
        echo "Yeet";
    }else{
        echo mysqli_num_rows($results);
    }

}else if($type == "addItem"){
    $name = $_REQUEST["n"];
    $price = $_REQUEST["p"];
    $cat = $_REQUEST["c"];
    $desc = $_REQUEST["d"];
    $img = $_REQUEST["i"];

    $conn = new mysqli('localhost', 'root', '', 'netid');
    if ($conn->connect_error){
        die($conn->connect_error);
    }

    $num = rand(10000, 99999);

    $query = "INSERT INTO products(itmName, id, itmCat, itmDesc, price, img) VALUES('" . $name . "', '" . $num . "', '" . $cat . "', '" . $desc . "', '" . $price . "', '" . $img . "');";
    $conn->query($query);

    $query = "SELECT * FROM products WHERE id = '" . $num . "' LIMIT 1;";
    $results = $conn->query($query);

    if(mysqli_num_rows($results) == 0){
        echo "";
    }else{
        echo "YeeHaw";
    }

}else if($type == "removeItem"){
    $num = $_REQUEST["n"];

    $conn = new mysqli('localhost', 'root', '', 'netid');
    if ($conn->connect_error){
        die($conn->connect_error);
    }

    $query = "DELETE FROM products WHERE id = '" . $num . "';";
    $conn->query($query);

    $query = "SELECT * FROM products WHERE id = '" . $num . "' LIMIT 1;";
    $results = $conn->query($query);

    if(mysqli_num_rows($results) == 0){
        echo "YeeHaw";
    }else{
        echo "";
    }
}else if($type == "showInv"){

    $conn = new mysqli('localhost', 'root', '', 'netid');
    if ($conn->connect_error){
        die($conn->connect_error);
    }

    $query = "SELECT * FROM products;";
    $result = $conn->query($query);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "
        <li> <a href='#'><img src='" . $row['img'] . "' width='235' height='275' /></a>
            <div class='product-info'>
                <h3>" . $row['itmName'] . "</h3>
                <div class='product-desc'>
                    <h4>" . $row['itmCat'] . "</h4>
                    <p>" . $row['itmDesc'] . "</p>
                    <p>" . $row['id'] . "</p>
                    <strong class='price'>$" . $row['price'] . ".00</strong> </div>
            </div>
        </li>
        ";
    }
}

?>