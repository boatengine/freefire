<?php

?>

<div class="card bg-dark text-light mt-4">
            <div class="card-header">
                อนุมัติสินค้า
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                                
                    <?php 
                              $shop = query("SELECT * FROM history")->fetchAll();
                              if(count($shop) < 1){
                              ?>
                                <?php
                                }
                                ?>
                                <?php 
                                    for($i = 0; $i<count($shop); $i++){
                                        if($shop[$i]['status'] == "wait"){
                                    ?>
                    <div class="col">
                        <div class="card bg-success" style="width: 100%;">
                            <form action="action/confirmuser.php" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $shop[$i]['id']; ?>" require>
                            <div class="card-header">
                                ยืนยันการสั่งซื้อ
                            </div>
                            <div class="card-body">
                                <div class="mt-1">
                                    <label class="form-label">
                                        ชื่อผู้ใช้
                                    </label>
                                    <input class="form-control bg-dark text-white" disabled value="<?php echo $shop[$i]['username']; ?>">
                                </div>
                                <div class="mt-1">
                                    <label class="form-label">
                                        ซื้อสินค้า
                                    </label>
                                    <input class="form-control bg-dark text-white" disabled value="<?php echo $shop[$i]['name']; ?>">
                                </div>
                                <div class="mt-1">
                                    <label class="form-label">
                                        ราคา
                                    </label>
                                    <input class="form-control bg-dark text-white" disabled value="<?php echo $shop[$i]['price']; ?> บาท">
                                </div>
                                <div class="mt-1">
                                    <label class="form-label">
                                        จากร้าน
                                    </label>
                                    <input class="form-control bg-dark text-white" disabled value="<?php echo $shop[$i]['market']; ?>">
                                </div>
                                <div class="mt-1">
                                    <label class="form-label">
                                        กรุณาเลือกยืนยัน
                                    </label>
                                    <select name="status" class="form-select bg-dark text-white">
                                        <option name="status" value="wait">รอดำเนินการ</option>
                                        <option name="status" value="error">ผิดพลาด (เงินจะเด้งกลับเข้าตัวผู้ใช้ตามจำนวนที่ซื้อหลังจากกดยืนยัน)</option>
                                        <option name="status" value="success">อนุมัติ</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark">บันทึกข้อมูล</button>

                            </div>
                            </form>
                        </div>
                    </div>

                                    <?php }} ?>
                </div>
            </div>
        </div>