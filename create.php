<?php

$user = $_REQUEST["u"];
$pass = $_REQUEST["p"];

$conn = new mysqli('localhost', 'root', '', 'netid');
if ($conn->connect_error){
    die($conn->connect_error);
}

$query = "SELECT * FROM users WHERE userID = (SELECT MAX(userID) FROM users);";
$results = $conn->query($query);

$row = mysqli_fetch_array($results, MYSQLI_ASSOC);

$newID = $row['userID'] + 1;

$salt1 = "i@e^";
$salt2 = "e&j3";

$password = $pass;

$pass = hash('sha512', '$salt1$password$salt2');

$query = "INSERT INTO users(userID, username, pass, isAdmin) VALUES($newID, $user, $pass, false)";
$conn->query($query);
?>