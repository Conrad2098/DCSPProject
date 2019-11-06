<?php

  $conn = new mysqli('localhost', 'root', '', 'Project');
  if ($conn->connect_error)
      die($conn->connect_error);

  $query = "CREATE TABLE users (
  userID INT,
  username VARCHAR(32) NOT NULL,
  password VARCHAR(32) NOT NULL,
  isAdmin BOOL,
  PRIMARY KEY (userID)) ENGINE=INNODB;";

  $result = $conn->query($query);
  if (!$result)
      die($conn->error);

  $salt1 = "i@e^";
  $salt2 = "e&j3";
  
  $password = "password";
  
  $pass = hash('sha512', '$salt1$password$salt2');
  
  $query = "INSERT INTO users VALUES(00001, 'username', $pass, false)";
  $conn->query($query);
  
  $adminpassword = "admin";
  
  $adminpass = hash('sha512', '$salt1$adminpassword$salt2');
  
  $query = "INSERT INTO users VALUES(00000, 'admin', $adminpass, true)";
  $conn->query($query);
  // test
?>
