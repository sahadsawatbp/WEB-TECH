<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.php" type="text/css">
    <script src="script.js">
    </script>
    <title>1</title>
</head>

<body>
    <form id="calform" action="index.php" method="post">
        <label for="inpvalue">กรอกสูตรคูณ : </label>
        <input type="text" id="inpvalue" name="inpvalue" value="" />
        <input type="submit" id="submit" value="แสดงตาราง">
    </form>
    <?php 
    if (isset($_POST['inpvalue'])) { 
        $number = $_POST['inpvalue']; 
        $v = $number; 
        echo "<br><b>ตารางสูตรคูณแม่ $v </b><br>";
        echo "<table>";
        for ($i = 1; $i <= 12; $i++) { 
            echo "<tr><td>$i</td><td>&nbsp;&nbsp;X</td><td>&nbsp;&nbsp;$v</td><td>&nbsp;&nbsp;=</td><td>&nbsp;&nbsp;".$i*$v."</td></tr>";
        }
        echo "</table>";
    } 
   
    ?>
    
</body>

</html>