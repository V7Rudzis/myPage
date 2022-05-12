<?php 

include './db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boobs!</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header class="header">
            <h1 href="#container1">MyPage</h1>
            <div class="nav">
                <a class="nav_link" href="#container2">Сервисы</a>
                <a class="nav_link" href="#container3">Донаты</a>
                <form method="post" action="">
                    <input type="submit" name="rus" value="ENG">
                    <input type="submit" name="eng" value="RUS">
                </form>
            </div>
    </header>
    <div class="container1">
        <div class="text1">
            <h1><?=$cont1?></h1>
        </div>
        <div class="img_bar"></div>
    </div>
    <hr color="black">
    <div class="container2" id="container2">
        <div class="images">
            <img src="./images/docker.png">
            <img src="./images/php.png">
            <img src="./images/js.png">
            <img src="./images/sql.png">
            <img src="./images/css.png">
            <img src="./images/html.png">
        </div>
        <div class="text2">
            <h1><?=$cont2?></h1>
        </div>
    </div>
    <hr color="black">
    <div class="container3" id="container3" >
        <div class="text3">
            <h1><?=$cont3?></h1>
        </div>
        <div class="donat">
            <div class="donat_cont">
                <h2>Give me money(RUB)</h2>
                <form method="post" class="pay" action="./jopa.php">
                    <input name="val_usd" class="usd" type="number" min="1" />
                    <input class="usd_btn" type="submit" name="GO" value="GO"></input>
                </form>
            </div>
        </div>
    </div>
    <hr color="black">
    <div class="container4">
        <div class="text4">
            <h1>ⓒRnDX2 2022  All rights reserved</h1>
            <h1><?=$cont4?></h1>
        </div>
    </div>

<script src="script.js"></script>



</body>
</html>