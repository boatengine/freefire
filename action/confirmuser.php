<?php
require_once dirname(__FILE__)."/../main/main.php";

if($_POST){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $i = query("SELECT * FROM history WHERE id = ?;", [$id])->fetch();
        $status = $_POST['status'];
        if($status == "error"){
            $point = $i['price'] + query("SELECT * FROM user WHERE username=?", [$i['username']])->fetch()['point'];
            query("UPDATE user SET point=? WHERE username=?", [$point, $i['username']]);
            query("UPDATE history SET status=? WHERE id=?", [$status, $id]);
            header("Location: /?page=confirm");
            return true;
        }
        query("UPDATE history SET status=? WHERE id=?", [$status, $id]);
        $_SESSION['savedata'] = true;
        header("Location: /?page=confirm");
    }
}else{
    header("Location: /");
}