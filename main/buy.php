<?php

function buy($id){
    global $website;
    $item = query("SELECT * FROM shop WHERE id=?;",array($id))->fetch();
    $user = query("SELECT * FROM user WHERE username=?;",array($_SESSION['username']))->fetch();
    $shopname = query("SELECT * FROM market WHERE id=?", [$item['market']])->fetch()['name'];
    if($user['point'] >= $item['price']){
        $point = $user['point'] - $item['price'];
        $date = thai_date_and_time(time());
        query("UPDATE user SET point=? WHERE username=?;",array($point, $_SESSION['username']));
        query("INSERT INTO history (type, name, price, date, username, text, status, market) VALUES (?,?,?,?,?,?,?,?)", ["Buy", $item['name'], $item['price'], $date, $_SESSION['username'], $_SESSION['uid'], "wait", $shopname]);
        sendLine();
        $msg = "\n";
        $msg .= "🙍‍♂️ผู้ใช้: ".$_SESSION['username']."\n";
        $msg .= "✉ข้อความที่ให้กรอก: ".$_SESSION['uid']." \n";
        $msg .= "🛒ได้ทำการซื้อ: ".$item['name']." \n";
        $msg .= "🧾ซื้อจากร้าน: ".$shopname." \n";
        bot($msg);
        return true;
    }else{
        $_SESSION['price_error'] = true;
        return false;
    }
}