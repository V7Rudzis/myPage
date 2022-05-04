<?php 
include './db.php';

$id_lang = 1;

if(isset($_POST['eng'])) {
    $id_lang = 1;
} elseif(isset($_POST['rus'])) {
    $id_lang = 2;
};

$cont1 = getDB('cont_1', $id_lang);
$cont2 = getDB('cont_2', $id_lang);
$cont3 = getDB('cont_3', $id_lang);
$cont4 = getDB('cont_4', $id_lang);

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
            <h1>MyPage</h1>
            <div class="nav">
                <a class="nav_link" href="#">Сервисы</a>
                <a class="nav_link" href="#">Донаты</a>
                
                <form method="post" action="">
                    <input type="submit" name="rus" value="ENG">
                    <input type="submit" name="eng" value="RUS">
                </form>

                <!-- <button>DARK</button> -->
            </div>
    </header>
    <div class="container1" >
        <div class="text1">
            <h1><?=$cont1?></h1>
        </div>
        <div class="img_bar"></div>
    </div>
    <hr color="black">
    <div class="container2">
        <div class="images">
            <img src="./images/docker.png">
            <img src="./images/php.png">
            <img src="./images/css.png">
            <img src="./images/sql.png">
            <img src="./images/html.png">
        </div>
        <div class="text2">
            <h1><?=$cont2?></h1>
        </div>
    </div>
    <hr color="black">
    <div class="container3">
        <div class="text3">
            <h1><?=$cont3?></h1>
        </div>
        <div class="donat">
        <iframe src="https://widget.qiwi.com/widgets/big-button-220x100?publicKey=48e7qUxn9T7RyYE1MVZswX1FRSbE6iyCj2gCRwwF3Dnh5XrasNTx3BGPiMsyXQFNKQhvukniQG8RTVhYm3iPpZL6tKcPBHsFrLLRgp2QiVdaUuK132fTrtGctPJKgvewTXQd5Lk7ZHbKk9A3wxXTRRV1HUDzaXEoRAT1mZsTVroUh42WTV4ZRBHm2Zd3z&noCache=true" width="220" height="100"allowTransparency="true" scrolling="no" frameBorder="0"></iframe>
        </div>
    </div>
    <hr color="black">
    <div class="container4">
        <div class="text4">
            <h1>ⓒRnDX2 2022  All rights reserved</h1>
            <h1><?=$cont4?></h1>
        </div>
    </div>
<div class="intro"></div>

    <!-- <script src="./script.js"> -->
</body>
</html>

