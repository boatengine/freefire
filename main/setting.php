<?php

$setting = [];
$setting['name'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['name'];
$setting['alert'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['alert'];
$setting['wallet'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['wallet'];
$setting['youtube'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['youtube'];
$setting['status'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['status'];
$setting['facebook'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['facebook'];
$setting['line'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['line'];
$setting['text'] = query("SELECT * FROM setting WHERE id=?", [1])->fetch()['text'];


function youtube_key(){
    global $setting;
    $link = $setting['youtube'];
    $link1 = str_replace("https://www.youtube.com/watch?v=", "", $link);
    $link2 = str_replace("https://youtu.be/", "", $link1);
    $array = explode("&", $link2);
    return $array[0];
}
