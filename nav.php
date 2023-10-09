
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-center order-2" id="navbarNav">
    <!-- <a class="navbar-brand" href="#">ยอดเงินในระบบ: 100</a> -->
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link <?php if(!isset($_GET['page']) or (isset($_GET['page']) and $_GET['page'] == "home")){ echo "active vert-move"; } ?>" aria-current="page" href="?page=home"><span style='font-size:24px' class='fas'>🏠</span><br>หน้าแรก</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page']) and $_GET['page'] == "topup"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=topup"><span style='font-size:24px' class='fas'>💰</span><br>เติมเงิน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page'])  and $_GET['page'] == "selectshop"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=selectshop"><span style='font-size:24px' class='fas'>🛒</span><br>ร้านค้า</a>
                </li>
                <?php 
                if(isset($_SESSION['username'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page'])  and $_GET['page'] == "history"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=history"><span style='font-size:24px' class='fas'>💾</span><br>ประวัติ</a>
                </li>

                <?php if($_SESSION['status'] == "admin"){ ?>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page'])  and $_GET['page'] == "confirm"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=confirm"><span style='font-size:24px' class='fas'>📠</span><br>อนุมัติรายการสั่งซื้อ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page'])  and $_GET['page'] == "admin"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=admin"><span style='font-size:24px' class='fas'>🔧</span><br>หลังร้าน</a>
                </li>
                <?php } ?>

                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page'])  and $_GET['page'] == "howto"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=howto"><span style='font-size:24px' class='fas'>❔</span><br>วิธีใช้งาน</a>
                </li>
                <?php if(!isset($_SESSION['username'])){ ?>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page'])  and $_GET['page'] == "login"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=login"><span style='font-size:24px' class='fas'>🔓</span><br>เข้าสู่ระบบ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['page'])  and $_GET['page'] == "register"){ echo "active vert-move"; } ?>" aria-current="page" href="?page=register"><span style='font-size:24px' class='fas'>📝</span><br>สมัครสมาชิก</a>
                </li>
                <?php }
                if(isset($_SESSION['username'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/?page=logout"><span style='font-size:24px' class='fas'>🔒</span><br>ออกจากระบบ</a>
                </li>

                <?php } ?>
            </ul>
            </div>
        </div>
    </nav>