<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<style>
    body,html{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    .container{
        margin:10px 0 0 10px;
        width:450px;
        height:170px;
        padding:5px;
        background:#D5D9DA;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .text-box{
        display:flex;
        flex-direction:column;
        margin:10px;
    }
    p{
        margin:0;
        padding:0;
        width:250px;
    }
    img{
        height:100px;
    }
    label{
        font-weight:bolder;
    }
</style>
<body>
    <?php
        $url = "http://10.0.15.20/lab8/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        foreach($result as $item){
            echo "<div class=\"container\"><div class=\"text-box\">";
            echo "<p>Name : <label>".$item["name"]."</label></p>";
            echo "<p>Capital : ".$item["capital"]."</p>";
            echo "<p>Population : ".$item["population"]."</p>";
            echo "<p>Region : ".$item["region"]."</p>";
            echo "<p>Location : ".$item["latlng"][0]." ".$item["latlng"][1]."</p>";
            echo "<p>Borders : ";
            foreach($item["borders"] as $border){
                echo $border." ";
            }
            echo "</p>";
            echo "</div>";
            echo "<img src=\"".$item["flag"]."\">";
            echo "</div>";
        }
    ?>
</body>
</html>