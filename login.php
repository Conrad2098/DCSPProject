<?php
$user = $_REQUEST["u"];
$pass = $_REQUEST["p"];

$conn = new mysqli('localhost', 'root', '', 'netid');
if ($conn->connect_error){
    die($conn->connect_error);
}

$query = 'SELECT * FROM users WHERE username = "' . $user . '" AND pass = "' . $pass . '" LIMIT 1;';
$result = $conn->query($query);

if(mysqli_num_rows($result)==0){
    echo "0";
}else{
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row["isAdmin"] == true){
        echo "admin";
    }else{
        echo "found";
    }
}
?>