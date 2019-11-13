<?php
$user = $_REQUEST["u"];
$pass = $_REQUEST["p"];

$conn = new mysqli('localhost', 'root', '', 'netid');
if ($conn->connect_error){
    die($conn->connect_error);
}

$num = rand(10000, 99999);

$query = "INSERT INTO users(userID, username, pass, isAdmin) VALUES($num, '" . $user . "', '" . $pass . "', false);";
$conn->query($query);

$query = "SELECT * FROM users WHERE username = '" . $user . "' AND pass = '" . $pass . "' LIMIT 1;";
$results = $conn->query($query);

if(mysqli_num_rows($results) == 0){
    echo mysqli_num_rows($results);
}else{
    echo "Yeet";
}
?>