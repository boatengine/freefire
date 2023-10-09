<?php
require_once dirname(__FILE__)."/../main/main.php";

if($_POST){
    if(isset($_POST['action'])){
        if($_POST['action'] == "setting-basic"){
            $name = $_POST['name'];
            $alert = $_POST['alert'];
            $wallet = $_POST['wallet'];
            $youtube = $_POST['youtube'];
            $line = $_POST['line'];
            $facebook = $_POST['facebook'];
            $text = $_POST['text'];
            if(query("UPDATE setting SET name=?, alert=?, wallet=?, youtube=?, facebook=?, line=?, text=? WHERE id=?", [$name, $alert, $wallet, $youtube, $facebook, $line, $text, 1])){
                header("Location: /?page=admin");
            }else{
                header("Location: /?page=admin");
            }
        }elseif($_POST['action'] == "resetpassword"){
          $pass1 = $_POST['pass1'];
          $pass2 = $_POST['pass2'];
          $pass3 = $_POST['pass3'];
          $user = query("SELECT * FROM user WHERE username=?", [$_SESSION['username']])->fetch();
          if(hashPassword($pass1) != $user['password']){
              $_SESSION['reset1'] = true;
              header("Location: /?page=admin");
              return true;
          }
          if($pass2 != $pass3){
              $_SESSION['reset2'] = true;
              header("Location: /?page=admin");
              return true;
          }
          if(query("UPDATE user SET password=? WHERE username=?", [hashPassword($pass3), $_SESSION['username']])){
              $_SESSION['reset3'] = true;
              header("Location: /?page=admin");
          }else{
              $_SESSION['reset4'] = true;
              header("Location: /?page=admin");
          }
      }
    }
    if(isset($_POST['edituser'])){
        if($_SESSION['status'] == "admin"){
            if(isset($_POST['delete'])){
                if($_POST['edituser'] == "admin"){
                    die("<br><br><center><h1>404<br>You can't delete username 'admin'</center></h1>");
                    return true;
                }
                query("DELETE FROM user WHERE username=?", [$_POST['edituser']]);
                header("Location: /?page=admin");
                return true;
            }
            if(!is_numeric($_POST['point'])){
                query("UPDATE user SET point=? WHERE username=?", [0, $_POST['edituser']]);
                header("Location: /?page=admin");
                return true;
            }
            query("UPDATE user SET point=? WHERE username=?",[$_POST['point'],  $_POST['edituser']]);
            header("Location: /?page=admin");
        }
    }
}

if($_GET){
    if(isset($_GET['status'])){
        if($setting['status'] == "on"){
            query("UPDATE setting SET status=? WHERE id=?", ['off', 1]);
        }else{
            query("UPDATE setting SET status=? WHERE id=?", ['on', 1]);
        }
        header("Location: /?page=admin");
    }
}

if(isset($_GET['q'])){
    // Array with names
    $array = query("SELECT * FROM user")->fetchAll();
    $a = [];
    for($i = 0; $i < count($array); $i++){
        $a[] = $array[$i]['username'];
    }
    
    // get the q parameter from URL
    $q = $_REQUEST["q"];
    
    $hint = "";
    
    // lookup all hints from array if $q is different from ""
    if ($q !== "") {
      $q = strtolower($q);
      $len=strlen($q);
      foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
          if ($hint === "") {
              $hint = $name;
              $user = query("SELECT * FROM user WHERE username=?", [$name])->fetch();
            echo '
            
            <div class="col">
            <div class="card bg-dark border border-info">
              <div class="card-body">
                <form action="action/action.php" method="post">
                <input type="hidden" name="edituser" value="'.$name.'">
                  <div class="form-group">
                    <div class="d-grid gap-2">
                      <a class="btn btn-outline-light">'.$name.'</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label> Point: </label>
                    <input class="form-control bg-dark text-white" value="'.$user['point'].'" autocomplete="off" name="point" placeholder="1-9xxxxx" required>
                  </div>
                  <div class="form-group">
                    <label> จำนวนการเติมทั้งหมด: </label>
                    <input class="form-control bg-dark text-white" value="'.$user['topup'].'" autocomplete="off" disabled name="topup" placeholder="1-9xxxxx" required>
                  </div>
                  <div class="form-group">
                    <label> เข้าใช้งานเมื่อ: </label>
                    <input class="form-control bg-dark text-white" value="'.$user['date'].'" autocomplete="off" disabled name="date" placeholder="1-9xxxxx" required>
                  </div><br>
                    <div class="form-check">
                        <input class="form-check-input" name="delete" type="checkbox" value="delete" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        หากต้องการจะลบข้อมูลผู้ใช้ให้กด
                        </label>
                    </div>
                  <br>
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div><br>
            ';
          } else {
            $hint = $name;
            echo "<a class='btn btn-outline-info'>".$name."</a> ";
          }
        }
      }
    }
    
    // Output "no suggestion" if no hint was found or output correct values
    echo $hint === "" ? "<center>ไม่พบข้อมูล</center>" : "";

}



