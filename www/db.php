<?php
  
  function getDB ($table, $id) {
    $mysql = new mysqli('mysql', 'root', 'test', 'NewDB');
    $mysql->query("SET NAMES 'utf8'");
    $res_cont = $mysql->query("SELECT `text` FROM `$table`" . "WHERE `id` = $id");
    $c_lang = $res_cont->fetch_assoc()["text"];
    return $c_lang;
  };

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