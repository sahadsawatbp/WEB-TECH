<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<style>
    body,html{
        height:90%;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }
    form{
        text-align:center;
    }
    .container{
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        border:1px solid black;
        padding:20px;
        border-radius:10px;
        background:#DDD;
    }
</style>
<body>
    <?php
        $name = $_POST['fname'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $profession = $_POST['profession'];
        echo "<div class=\"container\"><h2>Your Information</h2>";
        if(strlen($name) < 5){
            $name = "<span style=\"color:red\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</span>";
        }
        if(strlen($address) < 5){
            $address = "<span style=\"color:red\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</span>";
        }
        if($age < 1){
            $age = "<span style=\"color:red\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</span>";
        }
        if(strlen($profession) < 5){
            $profession = "<span style=\"color:red\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</span>";
        }
        $resident = $_POST['resident'];
        echo "<label style=\"font-weight:bolder;\">Name: ".$name."</label><br>";
        echo "<label style=\"font-weight:bolder;\">Address: ".$address."</label><br>";
        echo "<label style=\"font-weight:bolder;\">Age: ".$age."</label><br>";
        echo "<label style=\"font-weight:bolder;\">Profession: ".$profession."</label><br>";
        echo "<label style=\"font-weight:bolder;\">Resident Status: ".$resident."</label><br></div>";
    ?>
</body>
</html>