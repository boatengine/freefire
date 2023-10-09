<?php
require_once dirname(__FILE__)."/../main/main.php";

if($_POST){
    if(isset($_POST['check'])){
        if($_POST['check'] == "status"){
            echo $setting['status'];
        }
    }
}