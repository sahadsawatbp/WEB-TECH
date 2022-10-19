<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<style>
    body, html, form{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    .box,button{
        margin-top:15px;
    }
    h2{
        margin:10px 0 0 0;
    }
</style>
<body>
    <form action="index.php" method="POST">
        <h2>Currency Converter</h2>
        <div class="box">
            <label>From :</label>
            <select id="ccur" name="ccur"> 
                <option value="THB" id="THB" name="THB">THB</option>
                <option value="PHY" id="JPY" name="JPY">JPY</option>
                <option value="CNY" id="CNY" name="CNY">CNY</option>
                <option value="SGD" id="SGD" name="SGD">SGD</option>
                <option value="USD" id="USD" name="USD">USD</option>
            </select>
            <?php
                echo "<input type=\"text\" id=\"famount\" name=\"famount\" value=\"\"><br>";
            ?>
        </div>
        <div class="box">
            <label>To :</label>
            <select id="tcur" name="tcur"> 
                <option value="THB" id="THB" name="THB">THB</option>
                <option value="PHY" id="JPY" name="JPY">JPY</option>
                <option value="CNY" id="CNY" name="CNY">CNY</option>
                <option value="SGD" id="SGD" name="SGD">SGD</option>
                <option value="USD" id="USD" name="USD">USD</option>
            </select>
            <?php
            $url = "http://10.0.15.20/lab8/restapis/currencyrate";
            $response = file_get_contents($url);
            $result = json_decode($response, true);     
            if(isset($_POST['submit'])){
                    $famount = $_POST["famount"] ?: 0;
                    $to_amount = 0;
                if($_POST['ccur'] == "THB"){
                    $to_amount = $famount / $result["rates"]["THB"];
                }else if($_POST['ccur'] == "JPY"){
                    $to_amount = $famount / $result["rates"]["JPY"];
                }else if($_POST['ccur'] == "CNY"){
                    $to_amount = $famount / $result["rates"]["CNY"];
                }else if($_POST['ccur'] == "SGD"){
                    $to_amount = $famount / $result["rates"]["SGD"];
                }else if($_POST['ccur'] == "USD"){
                    $to_amount = $famount / $result["rates"]["USD"];
                }
                if($_POST['tcur'] == "THB"){
                    $to_amount = $to_amount * $result["rates"]["THB"];
                }else if($_POST['tcur'] == "JPY"){
                    $to_amount = $to_amount * $result["rates"]["JPY"];
                }else if($_POST['tcur'] == "CNY"){
                    $to_amount = $to_amount * $result["rates"]["CNY"];
                }else if($_POST['tcur'] == "SGD"){
                    $to_amount = $to_amount * $result["rates"]["SGD"];
                }else if($_POST['tcur'] == "USD"){
                    $to_amount = $to_amount * $result["rates"]["USD"];
                }
                echo "<input type=\"text\" id=\"tamount\" name=\"tamount\" value=".number_format((float)$to_amount, 2, '.', '')."><br>";
            }else{
                echo "<input type=\"text\" id=\"tamount\" name=\"tamount\" value=\"0\"><br>";
            }
            ?>
        </div>
        <button type="submit" name="submit">Convert</button>
    </form>
</body>
</html>