<?php

function hashPassword($pass){
    $password = hash("md5", $pass);
    $password2 = hash("sha256", $password);
    return $password2;
}

function login($user, $pass){
    if(!isset($_SESSON['username'])){
        if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) == 1){
            $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
            if($u['password'] == $pass){
                $_SESSION['username'] = $u['username'];
                $_SESSION['point'] = $u['point'];
                $_SESSION['topup'] = $u['topup'];
                $_SESSION['status'] = $u['status'];
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function checkuser(){
    if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
        if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) == 1){
            $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
            $_SESSION['username'] = $u['username'];
            $_SESSION['point'] = $u['point'];
            $_SESSION['topup'] = $u['topup'];
            $_SESSION['status'] = $u['status'];
        }else{
            unset($_SESSION['username']);
            unset($_SESSION['point']);
            unset($_SESSION['topup']);
            unset($_SESSION['status']);
        }
    }
}