<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>3</title>
</head>
<style>
    body,html{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        background:grey;
    }

    .container{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        width:500px;
        background:white;
        box-shadow:10px 10px 10px black;

    }
    .box{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        padding:20px;
        background:white;
    }
    h2{
        color:#2EAED1;
        text-align:center;
    }
    p{
        border-top:1px solid #333;
        padding-top:20px;
        line-height:14pt;
        height:56pt;
        width:450px;
        text-align:center;
	    overflow:hidden;
        font-weight:bold;
    }
    img{
        width:80%;
    }
    a{
        color:white;
        background:#2EAED1;
        text-decoration:none;
        padding:10px;
        font-weight:bold;
    }
    .button-group{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    i{
        margin-right:20px;
        cursor:pointer;
    }
</style>
<body>
    <div class="container">
        <div class="box">
        <?php
            $url = "https://www.themealdb.com/api/json/v1/1/random.php";
            $response = file_get_contents($url);
            $result = json_decode($response, true);
            echo "<img src=\" ".$result['meals'][0]['strMealThumb']. "\">";
            echo "<h2>".$result['meals'][0]['strMeal']."</h2>";
            echo "<p>".$result['meals'][0]['strInstructions']."</p>";
            echo "<div class=\"button-group\">";
            echo "<i onclick='window.location.reload();' class=\"material-icons\">&#xe5d5;</i>";
            echo "<a href=\"".$result['meals'][0]['strSource']."\" target=\"_blank\">Learn more</a>";
            echo "</div>"
        ?>
        </div>
    </div>
</body>
</html>