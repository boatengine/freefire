<?php 
require_once dirname(__FILE__)."/../main/main.php";
if($_POST){
    if(isset($_POST['bg'])){
        $name_file =  $_FILES['upload']['name'];
        $tmp_name =  $_FILES['upload']['tmp_name'];
        $locate_img = "../img/";
        move_uploaded_file($tmp_name,$locate_img."bg.jpg");
        header("Location: /?page=admin");
    }
    if(isset($_POST['img1'])){
        $name_file =  $_FILES['upload']['name'];
        $tmp_name =  $_FILES['upload']['tmp_name'];
        $locate_img = "../img/";
        move_uploaded_file($tmp_name,$locate_img."1.jpg");
        header("Location: /?page=admin");
    }
    if(isset($_POST['img2'])){
        $name_file =  $_FILES['upload']['name'];
        $tmp_name =  $_FILES['upload']['tmp_name'];
        $locate_img = "../img/";
        move_uploaded_file($tmp_name,$locate_img."2.jpg");
        header("Location: /?page=admin");
    }
    if(isset($_POST['img3'])){
        $name_file =  $_FILES['upload']['name'];
        $tmp_name =  $_FILES['upload']['tmp_name'];
        $locate_img = "../img/";
        move_uploaded_file($tmp_name,$locate_img."3.jpg");
        header("Location: /?page=admin");
    }
}