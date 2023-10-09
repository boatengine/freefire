<?php 
require_once dirname(__FILE__)."/main/main.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description">
    <META NAME="keywords" CONTENT="เติมฟรีฟาย, เติมเกม , เติมเกมราคาถูก">
    <META NAME="description" CONTENT="เติมเกมฟรีฟายง่ายๆ ราคาถูก">
    <meta property="og:image" content="img/bg.png">
    <link rel = "icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Video-Game-Controller-Icon-IDV-green.svg/1024px-Video-Game-Controller-Icon-IDV-green.svg.png" type = "image/x-icon">
        <meta property="og:image" content="image.jpg" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title><?php echo $setting['name']; ?></title>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link
            href="https://fonts.googleapis.com/css?family=Kanit:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <?php require_once "style.php"; ?>
  </head>
  <body>
  <?php require_once "script.php"; ?>
  <?php require_once "alert.php"; ?>
      <!-- Nav bar -->
  <?php require_once "nav.php"; ?>
    <!-- End Nav bar -->
    
    <!-- -->
    <div class="container mt-4">
        <!-- -->
        <div class="card bg-dark text-light p-2">
            <marquee><?php echo $setting['alert']; ?></marquee>
        </div>
        <!-- -->
        <?php 

        
        if(!isset($_GET['page']) or (isset($_GET['page']) and $_GET['page'] == "home")){
            // หน้าแรก
            require_once dirname(__FILE__)."/_page/home.php"; 

        }elseif(isset($_GET['page']) and $_GET['page'] == "topup"){
            // เติมเงิน
            require_once dirname(__FILE__)."/_page/topup.php"; 
            if(!isset($_SESSION['username'])){
                echo not_login();
            }else{
                
            }

        }elseif(isset($_GET['page'])  and $_GET['page'] == "selectshop"){
            // เลือกหมวดหมู่
            require_once dirname(__FILE__)."/_page/selectshop.php";
            if(!isset($_SESSION['username'])){
                echo not_login();
            }else{
                
            }

        }elseif(isset($_GET['page'])  and $_GET['page'] == "shop"){
            // ซื้อสินค้า
            require_once dirname(__FILE__)."/_page/shop.php";
            if(!isset($_SESSION['username'])){
                echo not_login();
            }else{
                
            }

        }elseif(isset($_GET['page'])  and $_GET['page'] == "history"){
            // ประวัติ
            require_once dirname(__FILE__)."/_page/history.php";
            if(!isset($_SESSION['username'])){
                echo not_login();
            }else{
                
            }

        }elseif(isset($_GET['page'])  and $_GET['page'] == "howto"){
            // วิธีใช้งาน
            require_once dirname(__FILE__)."/_page/howto.php";

        }elseif(isset($_GET['page'])  and $_GET['page'] == "login"){
            // เข้าสู่ระบบ
            require_once dirname(__FILE__)."/_page/login.php";
            if(isset($_SESSION['username'])){
                echo is_login();
            }else{
                
            }

        }elseif(isset($_GET['page'])  and $_GET['page'] == "register"){
            // สมัครสมาชิก
            require_once dirname(__FILE__)."/_page/register.php";
            if(isset($_SESSION['username'])){
                echo is_login();
            }else{
                
            }

        }elseif(isset($_GET['page'])  and $_GET['page'] == "admin"){
            // แอดมิน
            require_once dirname(__FILE__)."/_admin/home.php";
            if(!isset($_SESSION['username']) or $_SESSION['status'] != 'admin'){
                echo not_admin();
            }else{
                
            }

        }elseif(isset($_GET['page'])  and $_GET['page'] == "adminshop"){
            // จัดการร้านค้า
            require_once dirname(__FILE__)."/_admin/shop.php";
            if(!isset($_SESSION['username']) or $_SESSION['status'] != 'admin'){
                echo not_admin();
            }else{
                
            }
        }elseif(isset($_GET['page'])  and $_GET['page'] == "confirm"){
            // จัดการร้านค้า
            require_once dirname(__FILE__)."/_admin/confirm.php";
            if(!isset($_SESSION['username']) or $_SESSION['status'] != 'admin'){
                echo not_admin();
            }else{
                
            }
        }elseif(isset($_GET['page'])  and $_GET['page'] == "logout"){
            // ออกจากระบบ
            echo logout();
        }
        ?>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <br>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>