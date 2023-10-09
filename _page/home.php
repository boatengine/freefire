<script>
<?php 

if($setting['status'] != "on"){
    echo '
    Swal.fire(
      "ร้านปิด",
      "คุณจะไม่สามารถซื้อสินค้าได้ กรุณากลับมาใหม่อีกครั้งหลังร้านเปิด!",
      "warning"
    );
    ';
  
  }

?>
</script>

        
        <!-- -->
        <div class="row mt-4">
            <div class="col-12 col-md-9">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                        <img class="d-block w-100" alt="Second slide [800x400]" src="img\1.jpg?v=<?php echo rand(1, 1000); ?>" data-holder-rendered="true">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" alt="Second slide [800x400]" src="img\2.jpg?v=<?php echo rand(1, 1000); ?>" data-holder-rendered="true">
                        </div>
                        <div class="carousel-item active">
                        <img class="d-block w-100" alt="Second slide [800x400]" src="img\3.jpg?v=<?php echo rand(1, 1000); ?>" data-holder-rendered="true">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>&nbsp;

            </div>
            
            <div class="col-12 col-md-3">
                <div class="card bg-dark text-light">
                    <div class="text-center p-4">
                        <h2>สถานะร้านค้า</h2>
                        <h5 id="status"><span style='font-size:18px; color:#2CC200;' class='fas'>✔</span> เปิดให้บริการ</h5>
                    </div>
                </div>&nbsp;
                <div class="card bg-dark text-light">
                    <div class="text-center p-4">
                        <h2>ยอดเงินในระบบ</h2>
                        <h5><span style='font-size:18px; color:lightskyblue;' class='fas'>💵</span> <span id="point"><?php if(isset($_SESSION['username'])){echo $_SESSION['point'];}else{echo "---";} ?></span></h5>
                    </div>
                </div>&nbsp;
                <div class="card bg-dark text-light">
                    <div class="p-4">
                        <h2 class="text-center">ติดต่อแอดมิน</h2>
                        <div>
                        <h5><span style='font-size:18px; color: sandybrown;' class=''>📘</span> <a style="color: white;" href="<?php echo $setting['facebook']; ?>" target="__blank">Facebook</a></h5>
                        <h5><span style='font-size:18px; color: sandybrown;' class=''>📘</span> LineID: <?php echo $setting['line']; ?></h5>

                        </div>
                    </div>
                </div>&nbsp;
            </div>
        </div>
        <!-- -->

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        การซื้อล่าสุด
                    </div>
                    <div class="card-body">
                        <table class="table text-light text-center">
                            <thead>
                                <tr>
                                <th scope="col">ผู้ใช้</th>
                                <th scope="col">สินค้า</th>
                                <th scope="col">เวลา</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                                $history = query("SELECT * FROM history order by id DESC")->fetchAll();
                                arsort($history);
                                if(count($history) < 10){
                                    $a = count($history);
                                }else{
                                    $a = 10;
                                }
                                for($i=0;$i < $a;$i++){
                                    if($history[$i]['status'] == "success"){
                                ?>
                                <tr>
                                <td><?php echo $history[$i]['username']; ?></td>
                                <td><?php echo $history[$i]['name']; ?></td>
                                <td><?php echo $history[$i]['date']; ?></td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>&nbsp;
            </div>
            <div class="col-12 col-md-6">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        อันดับการเติมเงิน
                    </div>
                    <div class="card-body">
                        <table class="table text-light text-center">
                            <thead>
                                <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ผู้ใช้</th>
                                <th scope="col">จำนวนการเติม</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    $topup = query("SELECT * FROM user order by topup DESC")->fetchAll();
                                    arsort($topup);
                                    if(count($topup) < 10){
                                        $a = count($topup);
                                    }else{
                                        $a = 10;
                                    }
                                    for($i=0;$i < $a;$i++){
                                    ?>
                                    <tr>
                                    <th scope="row"><?php echo $i + 1; ?></th>
                                    <td><?php echo $topup[$i]['username']; ?></td>
                                    <td><?php echo $topup[$i]['topup']; ?></td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>