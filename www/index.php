<?php 
include './db.php';

//$cont1 = $c1_r;

if(isset($_POST['eng'])) {
    $cont1 = $c1_r;
    $cont2 = $c2_r;
    $cont3 = $c3_r;
    $cont4 = $c4_r;
} elseif(isset($_POST['rus'])) {
    $cont1 = $c1_e;
    $cont2 = $c2_e;
    $cont3 = $c3_e;
    $cont4 = $c4_e;
}

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
    <div class="container2">
        <div class="text2">
            <h1><?=$cont2?></h1>
        </div>
    </div>
    <div class="container3">
        <div class="text2">
            <h1><?=$cont3?></h1>
        </div>
    </div>
    <div class="container4">
        <div class="text2">
            <h1>ⓒRnDX2 2022  All rights reserved</h1>
            <h1><?=$cont4?></h1>
        </div>
    </div>
<div class="intro"></div>
    

    <!-- <script src="./script.js"> -->
</body>
</html>

