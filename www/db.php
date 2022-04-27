<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <?php

    

    $mysql = new mysqli('mysql', 'root', 'test', 'NewDB');
    $mysql->query("SET NAMES 'utf8'");


    if (isset($_POST['btn1']))   {
      $btn =  "<p>Нажата кнопка 5</p>";
    }


    $res1 = $mysql->query("SELECT `text` FROM `Text`" . ' WHERE `id` = 1');
    $a = $res1->fetch_assoc();
    $a1 =  $a['text'];

    $res2 = $mysql->query("SELECT `text` FROM `Text`" . ' WHERE `id` = 2');
    $b = $res2->fetch_assoc();
    $a2 =  $b['text'];
    
    
  ?>
</body>
</html>