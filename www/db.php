  <?php
  
    function getDB ($table, $id) {
      $mysql = new mysqli('mysql', 'root', 'test', 'NewDB');
      $mysql->query("SET NAMES 'utf8'");
      $res_cont = $mysql->query("SELECT `text` FROM `$table`" . "WHERE `id` = $id");
      $c_lang = $res_cont->fetch_assoc()["text"];
      return $c_lang;
    };

    ?>