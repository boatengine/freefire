<?php
require_once dirname(__FILE__)."/main/main.php";
if(!$_POST['action']){
    header("Location: /");
}
if($_POST){
    if(isset($_SESSION['price_success'])){
        header("Location: ./");
        return true;
    }
    if(isset($_SESSION['topup_error'])){
        header("Location: ./");
        return true;
    }
    $link = $_POST['link'];

    $voucher = str_replace("https://gift.truemoney.com/campaign/?v=","",$link);
    $phone = $setting['wallet'];

    $payload = [
        'mobile' => $phone,
        'voucher_hash' => $voucher
    ];

    $payload = json_encode($payload);

    $ch = curl_init("https://gift.truemoney.com/campaign/vouchers/".$voucher."/redeem");
    curl_setopt_array($ch, [
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => ['Content-Type:application/json'],
        CURLOPT_RETURNTRANSFER => true,
    ]);

    $result = curl_exec($ch);
    $json = json_decode($result, true);

    if ($json['status']['code'] == 'VOUCHER_OUT_OF_STOCK' or $json['status']['code'] =='TARGET_USER_REDEEMED'){
        // use already
        $_SESSION['use_already'] = true;
        header("Location: ./");
    } elseif ($json['status']['code'] == 'SUCCESS') {

        if ($json['data']['my_ticket']['mobile'] == $phone) {
            //pay success
            $price1 = $json['data']['my_ticket']['amount_baht'];
            $price = str_replace(",", "", $price1);
            $point = $price + query("SELECT * FROM user WHERE username=?", [$_SESSION['username']])->fetch()['point'];
            query("UPDATE user SET point=? WHERE username=?", [$point, $_SESSION['username']]);
            query("UPDATE `user` SET `topup`= `topup` + ? WHERE  `username`= ?;",array($price, $_SESSION['username']));
            query("INSERT INTO history (type, name, price, status, date, text, username) VALUES (?,?,?,?,?,?,?)", ["Topup", "TrueMoney Wallet", $price, "topup", thai_date_and_time(time()), "-", $_SESSION['username']]);
            sendLine();
            $msg = "\n";
            $msg .= "ผู้ใช้: ".$_SESSION['username']."\n";
            $msg .= "เติมเงินเข้าเว็บ: ".$price." บาท\n";
            bot($msg);
            $_SESSION['price_success'] = $price;
            header("Location: ./");
            return true;
        } else {
            // pay error
            $_SESSION['topup_error'] = true;
            header("Location: ./");
            return true;
        }
    } else {
        // get json error
        $_SESSION['json_error'] = true;
        header("Location: ./");
        return true;
    }
    header("Location: ./");
}