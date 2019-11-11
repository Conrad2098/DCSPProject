<?php
  $conn = new mysqli("localhost", "root", "", "netid");
  if ($conn->connect_error){
    die($conn->connect_error);
  }

  $query = "DROP TABLE IF EXISTS products;";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }

  $query = "CREATE TABLE IF NOT EXISTS products (
  itmName VARCHAR(128),
  id INT,
  itmCat VARCHAR(128),
  itmDesc VARCHAR(128),
  price FLOAT,
  img VARCHAR(128),
  PRIMARY KEY (id)) ENGINE=INNODB;";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }

  // Starts insertion
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
   VALUES ('asus 2060 graphics card','001', 'graphicscards', 'asus 2060 graphics card','150.00', './CSS/Images/asus_2060_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }

  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('asus 2070 graphics card','002', 'graphicscards', 'asus 2070 graphics card','200.00', './CSS/Images/asus_2070_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }

  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('asus 2080 graphics card','003', 'graphicscards', 'asus 2080 graphics card','300.00', './CSS/Images/asus_2080_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }

  echo "Table Complete";
?>
