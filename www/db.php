  <?php

    $mysql = new mysqli('mysql', 'root', 'test', 'NewDB');
    $mysql->query("SET NAMES 'utf8'");
    
    
    $res_cont1_ru = $mysql->query("SELECT `text` FROM `cont_1`" . " WHERE `id` = 1");
    $c1_r = $res_cont1_ru->fetch_assoc()['text'];

    $res_cont1_eng = $mysql->query("SELECT `text` FROM `cont_1`" . " WHERE `id` = 2");
    $c1_e = $res_cont1_eng->fetch_assoc()['text'];


    $res_cont2_ru = $mysql->query("SELECT `text` FROM `cont_2`" . " WHERE `id` = 1");
    $c2_r = $res_cont2_ru->fetch_assoc()['text'];

    $res_cont2_eng = $mysql->query("SELECT `text` FROM `cont_2`" . " WHERE `id` = 2");
    $c2_e = $res_cont2_eng->fetch_assoc()['text'];


    $res_cont3_ru = $mysql->query("SELECT `text` FROM `cont_3`" . " WHERE `id` = 1");
    $c3_r = $res_cont3_ru->fetch_assoc()['text'];

    $res_cont3_eng = $mysql->query("SELECT `text` FROM `cont_3`" . " WHERE `id` = 2");
    $c3_e = $res_cont3_eng->fetch_assoc()['text'];


    $res_cont4_ru = $mysql->query("SELECT `text` FROM `cont_4`" . " WHERE `id` = 1");
    $c4_r = $res_cont4_ru->fetch_assoc()['text'];

    $res_cont4_eng = $mysql->query("SELECT `text` FROM `cont_4`" . " WHERE `id` = 2");
    $c4_e = $res_cont4_eng->fetch_assoc()['text'];
    
    