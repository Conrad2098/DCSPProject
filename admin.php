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

}else if($type == "removeItem"){

}

?>