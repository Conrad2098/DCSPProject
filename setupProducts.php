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
  id VARCHAR(5),
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
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('evga 2060 graphics card','004', 'graphicscards', 'evga 2060 graphics card','350.00', './CSS/Images/evga_2060_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('evga 2070 graphics card','005', 'graphicscards', 'evga 2070 graphics card','580.00', './CSS/Images/evga_2070_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('evga 2080 graphics card','006', 'graphicscards', 'evga 2080 graphics card','1000.00', './CSS/Images/evga_2080_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('msi 2060 graphics card','007', 'graphicscards', 'msi 2060 graphics card','380.00', './CSS/Images/msi_2060_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('msi 2070 graphics card','008', 'graphicscards', 'msi 2070 graphics card','500.00', './CSS/Images/msi_2070_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('msi 2080 graphics card','009', 'graphicscards', 'msi 2080 graphics card','750.00', './CSS/Images/msi_2080_gc.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('asus z370 motherboard','010', 'motherboard', 'asus z370 motherboard','150.00', './CSS/Images/asus_z370_mb.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('asus z390 motherboard','011', 'motherboard', 'asus z390 motherboard','300.00', './CSS/Images/asus_z390_mb.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('msi z370 motherboard','012', 'motherboard', 'msi z370 motherboard','100.00', './CSS/Images/msi_z370_mb.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('msi z390 motherboard','013', 'motherboard', 'msi z390 motherboard','200.00', './CSS/Images/msi_z390_mb.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('corsair ddr4 16gb ram','014', 'ram', 'corsair ddr4 16gb ram','100.00', './CSS/Images/corsair_ddr4_16ram.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('corsair ddr4 32gb ram','015', 'ram', 'corsair ddr4 32gb ram','175.00', './CSS/Images/corsair_ddr4_32ram.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('gskill ddr4 16gb ram','016', 'ram', 'gskill ddr4 16gb ram','100.00', './CSS/Images/gskill_ddr4_16ram.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('gskill ddr4 32gb ram','017', 'ram', 'gskill ddr4 32gb ram','200.00', './CSS/Images/gskill_ddr4_32ram.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('intel i5 CPU','018', 'cpu', 'intel i5 CPU','220.00', './CSS/Images/intel_i5_cpu.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('intel i7 CPU','019', 'cpu', 'intel i7 CPU','350.00', './CSS/Images/intel_i7_cpu.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('intel i9 CPU','020', 'cpu', 'intel i9 CPU','500.00', './CSS/Images/intel_i9_cpu.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('ryzen 5 CPU','021', 'cpu', 'ryzen 5 CPU','200.00', './CSS/Images/ryzen_5_cpu.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  }
  
  $query = "INSERT INTO products (itmName, id, itmCat, itmDesc, price, img)
  VALUES ('ryzen 7 CPU','022', 'cpu', 'ryzen 7 CPU','375.00', './CSS/Images/ryzen_7_cpu.jpg')";

  $result = $conn->query($query);
  if (!$result){
    die($conn->error);
  } 
  

  echo "Table Complete";
?>
