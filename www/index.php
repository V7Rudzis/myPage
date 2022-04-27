<?php 
include './db.php';
if (isset($_POST['btn1']))   {
    $btn =  "<p>Нажата кнопка 5</p>";
  }
echo $btn;
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
                <a class="nav_link" href="#">Работы</a>
                <a class="nav_link" href="#">Донаты</a>
                <input type="button" class="btn1" name="btn1" id="btn1">
                <button class="btn1">ENG</button>
                <button>DARK</button>
            </div>
    </header>
    <div class="container1">
        <div class="text1">
            <h1><?=$a1?></h1>
        </div>
        <div class="img_bar">

        </div>
    </div>
    <div class="container2">
        <div class="text2">
            <h1><?=$a2?></h1>
        </div>
    </div>
    <div class="container3">
        <div class="text2">
            <h1>Какой-то текст</h1>
        </div>
    </div>
    <div class="container4">
        <div class="text2">
            <h1>Какой-то текст</h1>
        </div>
    </div>
<div class="intro"></div>
    

    <!-- <script src="./script.js"> -->
</body>
</html>

