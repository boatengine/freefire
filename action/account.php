<?php
require_once dirname(__FILE__)."/../main/main.php";

if($_POST){
    if(isset($_POST['action'])){
        if($_POST['action'] == "register"){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $repass = $_POST['re-password'];
            if($username == "" or $password == "" or $repass == ""){
                $_SESSION['register-null'] = true;
                header("Location: /?page=register");
                return;
            }
            if($password != $repass){
                $_SESSION['re-pass'] = true;
                header("Location: /?page=register");
                return;
            }
            if(count(query("SELECT * FROM user WHERE username=?", [$username])->fetchAll()) > 0){
                $_SESSION['register_error_username'] = true;
                header("Location: /?page=register");
                return;
            }
            if(query("INSERT INTO user (username, password, topup, point, date) VALUES (?, ?, ?, ? ,?)", [$username, hashPassword($password), 0, 0, thai_date_and_time(time())])){
                $_SESSION['register_success'] = true;
                header("Location: /?page=login");
                return;
            }
            header("Location: /?page=register");
        }
        if($_POST['action'] == "login"){
            if(login($_POST['username'], hashPassword($_POST['password']))){
                $_SESSION['login_success'] = true;
                header("Location: /");
            }else{
                $_SESSION['login_error'] = true;;
                header("Location: /?page=login");
            }
        }
    }
}else{
    header("Location: /");
}
