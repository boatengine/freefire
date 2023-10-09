<?php 
require_once dirname(__FILE__)."/dbconfig.php";
date_default_timezone_set('Asia/Bangkok');

session_start();
$dbname = $dbconfig['name'];
$dbhost = $dbconfig['host'];
$dbuser = $dbconfig['user'];
$dbpass = $dbconfig['pass'];

try{
    $main = (object) array(
        'sql' => new PDO("mysql:host=$dbhost;dbname=$dbname;", $dbuser, $dbpass)
    );
}catch(PDOException $e){
    die($e->getMessage());
}

function query($sql, $array=array()){
    global $main;
    $resualt = $main->sql->prepare($sql);
    $resualt->execute($array);
    return $resualt;
}

require_once dirname(__FILE__)."/buy.php";
require_once dirname(__FILE__)."/line.php";
require_once dirname(__FILE__)."/check.php";
require_once dirname(__FILE__)."/acount.php";
require_once dirname(__FILE__)."/setting.php";

/** START Command */
$dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
$monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
function thai_date_and_time($time){
    global $dayTH,$monthTH;
    $thai_date_return = date("j",$time);
    $thai_date_return.=" ".$monthTH[date("n",$time)];
    $thai_date_return.= " ".(date("Y",$time)+543);
    $thai_date_return.= " เวลา ".date("H:i:s",$time);
    return $thai_date_return;
}

checkuser();