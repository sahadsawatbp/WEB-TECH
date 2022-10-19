<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<style>
    body,html{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    table,th,tr,td{
        border-collapse: collapse;
    }

    th{
        border-bottom: 2px solid black;
        width: 120px;
    }
    td{
        border-bottom: .8px solid rgb(116, 116, 116);
        text-align: center;
    }
</style>
<body>
    <table>
        <tr>
            <th>ลำดับ</th>
            <th>จังหวัด</th>
            <th>ผู้ติดเชื้อ</th>
            <th>เสียชีวิต</th>
            <th>ยอดผู้ป่วยสะสม</th>
        </tr>
        <?php
            $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
            $response = file_get_contents($url);
            $result = json_decode($response, true);
            $i = 1;
            foreach ($result as $item){
                if ($item['txn_date'] == "2022-09-02"){
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$item['province']."</td>";
                    echo "<td>".$item['new_case']."</td>";
                    echo "<td>".$item['new_death']."</td>";
                    echo "<td>".number_format($item['total_case_excludeabroad'])."</td>";
                    echo "</tr>";
                    $i += 1;
                }
                
            }
            
        ?>
    </table>
</body>
</html>