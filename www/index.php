<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>OPOPOPOPO</h1>

  <?php
    $server = 'mysql';
    $dbname = 'NewDB';
    $username = 'root';
    $password = 'test';
    $dsn = "mysql:host=$server;dbname=$dbname";
    
    $mysql = new mysqli($server, $username,
    $password, $dbname);
    $mysql->query("SET NAMES 'utf8'");

    if($mysql->connect_error) {
      echo 'ERRRRR' . $mysql->connect_errno."<br>";
    }else{
      //$mysql->query("DROP TABLE `ex1`");
      $mysql->query("INSERT INTO `ex2` (`name`, `bio`)
      VALUES('John', 'TEXTTEXT')");
    }

    $mysql->close();


  ?>
</body>
</html>



