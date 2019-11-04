<?php
  require_once "login.php";

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error)
      die($conn->connect_error);

  $query = "CREATE TABLE IF NOT EXISTS products (
  name VARCHAR(128),
  id INT,
  price FLOAT,
  image BLOB,
  PRIMARY KEY (id)) ENGINE=INNODB;";

  $result = $conn->query($query);
  if (!$result)
      die($conn->error);


  // Starts insertion
  $query = "INSERT INTO products (name, id, price, image)
   VALUES ('product','123','15.99', NULL)";

  $result = $conn->query($query);
  if (!$result)
     die($conn->error);
/*
  $query = "INSERT INTO classics (author, title, category, year, isbn)
   VALUES ('Jane Austen','Pride and Prejudice','Fiction','1811','9780582506206')";

  $result = $conn->query($query);
  if (!$result)
     die($conn->error);

  $query = "INSERT INTO classics (author, title, category, year, isbn)
   VALUES ('Charles Darwin','The Origin of Species','Non-Fiction','1856','9780517123201')";

  $result = $conn->query($query);
  if (!$result)
     die($conn->error);

  $query = "INSERT INTO classics (author, title, category, year, isbn)
   VALUES ('Charles Dickens','The Old Curiosity Shop','Fiction','1841','9780099533474')";

  $result = $conn->query($query);
  if (!$result)
     die($conn->error);

  $query = "INSERT INTO classics (author, title, category, year, isbn)
   VALUES ('William Shakespeare','Romeo and Juliet','Play','1594','9780192814968')";

  $result = $conn->query($query);
  if (!$result)
     die($conn->error);

  $query = "INSERT INTO classics (author, title, category, year, isbn)
   VALUES ('Charles Dickens','Little Dorrit','Fiction','1857','9780141439969')";

   $result = $conn->query($query);
   if (!$result)
       die($conn->error);

  else
      echo "Table build successful.";
  */

?>
