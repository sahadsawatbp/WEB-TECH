<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <title>2</title>
</head>
<style>
    body{
        margin-left:20px;
        font-family: 'Kanit', sans-serif;
    }
    table, td, th {
        border-bottom:1px solid black;
        border-collapse: collapse;
        text-align:center;
    }
    td,th{
        width:100px;
    }
    .button{
        padding:10px;
        border:none;
        border-radius:5px;
        background:#45A5E8;
        cursor: pointer;
        color:white;
    }
</style>
<body>
    <form action="index.php" method="post">
        <h1><label for="header">Employee form</label></h1>
        <label for="ID">ID :</label>
        <input type="text" id="ID" name="ID"><br><br>
        <label for="name">Name :</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="age">Age :</label>
        <input type="text" id="age" name="age" style="width:50px;"><br><br>
        <label for="salary">Salary :</label>
        <input type="text" id="salary" name="salary" style="width:80px;"><br><br>
        <label for="address">Address :</label>
        <textarea name="address" rows="5" cols="25"></textarea><br><br>
        <div>
            <button type="submit" class="button" name="submit">Submit</button><br>
        </div>
    </form>
    <?php
        class MyDB extends SQLite3 {
            function __construct() {
               $this->open('employee.db');
            }
        }
        $db = new SQLite3('employee.db');
        if(isset($_POST['submit'])){
            if(!empty($_POST['ID']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['salary']) && !empty($_POST['address'])){
                $em_id = $_POST['ID'];
                $em_name = $_POST['name'];
                $em_age = $_POST['age'];
                $em_salary = $_POST['salary'];
                $em_addr = $_POST['address'];
                $sql =<<<EOF
                INSERT INTO EMPLOYEE (ID,NAME,AGE,ADDRESS,SALARY)
                VALUES ($em_id, '$em_name', $em_age, '$em_addr', $em_salary );
                EOF;
                $db->exec($sql);
            }else{
                echo "<br>All fields required";
            }
        }
        
        $ret = $db->query("SELECT * from EMPLOYEE");
        echo '<h1>List of Employees</h1><table class="table"><thead><tr><th>ID</th><th>Name</th><th>Age</th><th>Address</th><th>Salary</th></tr></thead><tbody>';
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            echo "<tr><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['AGE']."</td><td>". $row['ADDRESS'] ."</td><td>".$row['SALARY']."</td></tr></tbody>";
         }
         echo "</table>";
       $db->close();
    ?>
</body>
</html>