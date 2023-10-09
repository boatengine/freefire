<?php

require_once dirname(__FILE__)."/../main/main.php";

if($_POST){
    if(isset($_POST['action'])){
        if($_POST['action'] == "category"){
            $imgname = rand(100000, 999999).".jpg";
            $name = $_POST['name'];
            $description = $_POST['description'];
            $name_file =  $_FILES['upload']['name'];
            $tmp_name =  $_FILES['upload']['tmp_name'];
            $locate_img = "../img/";
            move_uploaded_file($tmp_name,$locate_img.$imgname);
            query("INSERT INTO market (name, description, picture, text) VALUES (?,?,?,?)", [$name, $description, $imgname, $_POST['text']]);
            header("Location: /?page=admin#shop");
        }
    }
    if(isset($_POST['addshop'])){
        $id = $_POST['addshop'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $imgname = rand(100000, 999999).".jpg";
        $name_file =  $_FILES['upload']['name'];
        $tmp_name =  $_FILES['upload']['tmp_name'];
        $locate_img = "../img/";
        move_uploaded_file($tmp_name,$locate_img.$imgname);
        query("INSERT INTO shop (name, price, picture, market) VALUES (?,?,?,?)", [$name, $price, $imgname, $id]);
        header("Location: /?page=adminshop&id=$id");
    }
    if(isset($_POST['edit'])){
        $id = $_POST['edit'];
        $mkid = $_POST['editid'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        query("UPDATE shop SET name=?, price=? WHERE id=?", [$name, $price, $id]);
        header("Location: /?page=adminshop&id=$mkid");
    }
    if(isset($_POST['uid'])){
        $uuid = $_POST['uid'];
        $_SESSION['uid'] = $uuid;
        echo $_SESSION['uid'];
    }
}
if($_GET){
    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $id=$_GET['id'];
        query("DELETE FROM shop WHERE id=?", [$delete]);
        header("Location: /?page=adminshop&id=$id");
    }
    if(isset($_GET['deleteshop'])){
        $delete = $_GET['deleteshop'];
        query("DELETE FROM market WHERE id=?", [$delete]);
        query("DELETE FROM shop WHERE market=?", [$delete]);
        header("Location: /?page=admin#shop");
    }
    if(isset($_GET['buy'])){
        $id = $_GET['buy'];
        if($setting['status'] != "on"){
            header("Location: /");
            return;
        }
        if(buy($id)){
            $_SESSION['buy_success'] = true;
            header("Location: /?page=history");
        }else{
            header("Location: /");
        }
    }
}