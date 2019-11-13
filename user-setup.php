<?php

  $conn = new mysqli('localhost', 'root', '', 'netid');
  if ($conn->connect_error){
      die($conn->connect_error);
  }

  $query = "DROP TABLE users;";
  $conn->query($query);

  $query = "CREATE TABLE users (
  userID INT,
  username VARCHAR(32) NOT NULL,
  pass VARCHAR(32) NOT NULL,
  cart VARCHAR(128),
  isAdmin BOOL,
  PRIMARY KEY (userID)) ENGINE=INNODB;";

  $result = $conn->query($query);
  if (!$result){
      die($conn->error);
  }
  

  $query = "INSERT INTO users(userID, username, pass, isAdmin) VALUES(00001, 'username', 'password', false)";
  $conn->query($query);
  
  $query = "INSERT INTO users(userID, username, pass, isAdmin) VALUES(00000, 'admin', 'admin', true)";
  $conn->query($query);

  echo "Table Made.";
?>
