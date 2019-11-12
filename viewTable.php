<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
    </head>
    <body>
        <?php
        
        $conn = new mysqli('localhost', 'root', '', 'netid');
        if ($conn->connect_error){
            die($conn->connect_error);
        }

        $query = 'SELECT * FROM products;';
        $result = $conn->query($query);

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo "<h1>" . $row["id"] . "</h1>";
            echo "<p>" . $row["itmName"] . "</p>";
            echo "<p>" . $row["price"] . "</p>";
            echo "<p>" . $row["img"] . "</p>";
        }
        
        ?>
    </body>
</html>