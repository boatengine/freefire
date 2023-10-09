<?php

function not_login(){
    $alert = '
    <script>
    setInterval(function(){location.href="?page=login"},1000);
    Swal.fire(
        "กรุณาเข้าสู่ระบบ",
        "",
        "warning"
    );
    </script>
    ';
    return $alert;
}

function is_login(){
    $alert = '
    <script>
    setInterval(function(){location.href="/"},1000);
    Swal.fire(
        "เข้าสู่ระบบแล้ว!",
        "",
        "success"
    );
    </script>
    ';
    return $alert;
}

function not_admin(){
    $alert = '
    <script>
    setInterval(function(){location.href="/"},1000);
    Swal.fire(
        "ไม่สามารถเข้าถึงได้!",
        "",
        "success"
    );
    </script>
    ';
    return $alert;
}


function logout(){
    unset($_SESSION['username']);
    unset($_SESSION['point']);
    unset($_SESSION['topup']);
    unset($_SESSION['status']);
    $alert = '
    <script>
    setInterval(function(){location.href="/"},1000);
    Swal.fire(
        "ออกจากระบบ!",
        "กำลังพาคุณออกจากระบบ",
        "success"
    );
    </script>
    ';
    return $alert;
}