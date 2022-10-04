<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }
    body,html{
        display:grid;
        margin: 0;

    }
    img{
        width:100%;
        vertical-align: middle;
        margin-top: 8px;
        border-radius:10px;
    }
    .rows{
        display: flex;
        flex-wrap:wrap;
        padding: 0 4px;
    }
    .cols {
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }
    img:hover{
        transform:scale(1.2);
        z-index: 1;
        transition:.5s;
    }
</style>
<body>
    <?php

        echo "
        <div style=\"margin-top:10px;\" class=\"rows\">
            <div class=\"cols\">
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454646786637866/2.jpg\"/> 
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454647130574878/1.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454647445135390/10.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454647805837322/9.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454999955427368/15.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026457633915424788/23.jpg\"/>
            </div>
            <div class=\"cols\">
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454648330145802/8.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454648669863936/7.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454998663577650/11.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454648971866132/6.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454999670194176/14.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454649705877574/3.webp\"/>  
            </div>
            <div class=\"cols\">
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454649210933248/5.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026456044664279100/21.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026455000685223996/18.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026455000207069265/16.jpg\"/>
            </div>
            <div class=\"cols\">
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454999393374228/13.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454999183663147/12.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026454998286082048/20.jpg\"/>
                <img src=\"https://cdn.discordapp.com/attachments/936169548019826688/1026457286601883648/22.jpg\"/>
            </div>
        </div>
        
        
        
        
        ";
    ?>
</body>
</html>