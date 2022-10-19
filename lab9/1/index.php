<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        class MyDB extends SQLite3 {
            function __construct() {
               $this->open('customers.db');
            }
         }
         // Open Database 
         $db = new MyDB();
         $sql ="SELECT * from CUSTOMERS";
         $ret = $db->query($sql);
         echo '<table class="table"><thead><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th></tr></thead><tbody>';
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            echo "<tr><td>".$row['CustomerId']."</td><td>".$row['FirstName']." ".$row['LastName']."</td><td>". $row['Address'] ."</td><td>".$row['Phone'] ."</td><td>".$row['Email'] ."</td></tr></tbody>";
         }
         echo "</table>";
         $em_id = $db->querySingle("SELECT * FROM CUSTOMERS ORDER BY CustomerID DESC LIMIT 1");
         if(isset($_POST)){
            $sql = "DELETE from CUSTOMERS where CustomerId = $em_id;";
         }
         $ret = $db->exec($sql);
         // Close database
         $db->close();
    ?>
    <form action="index.php" method="post">
    <input type="submit" name="insert" value="Delete last row"/>
</body>
</html>