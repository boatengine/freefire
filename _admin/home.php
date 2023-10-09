
        
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card bg-dark text-light mt-4">
                    <div class="card-header">
                        ตั้งค่าพื้นฐาน
                    </div>
                    <div class="card-body">
                        <form action="action/action.php" method="post">
                            <input type="hidden" name="action" value="setting-basic">
                            <div class="mt-2">
                                <label class="form-label">
                                    ชื่อเว็บไซต์
                                </label>
                                <input name="name" autocomplete="off" class="form-control bg-dark text-info border border-info" value="<?php echo $setting['name']; ?>">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">
                                    ข้อความประกาศ
                                </label>
                                <input name="alert" autocomplete="off"  class="form-control bg-dark text-info border border-info" value="<?php echo $setting['alert']; ?>">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">
                                    เบอร์วอเล็ต
                                </label>
                                <input name="wallet" autocomplete="off"  class="form-control bg-dark text-info border border-info" value="<?php echo $setting['wallet']; ?>">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">
                                    ลิงก์ยูทูปวิธีการใช้งาน
                                </label>
                                <input name="youtube" autocomplete="off"  class="form-control bg-dark text-info border border-info" value="<?php echo $setting['youtube']; ?>">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">
                                    ลิงก์เฟซบุ้คติดต่อ
                                </label>
                                <input name="facebook" autocomplete="off"  class="form-control bg-dark text-info border border-info" value="<?php echo $setting['facebook']; ?>">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">
                                    ไอดีไลน์
                                </label>
                                <input name="line" autocomplete="off"  class="form-control bg-dark text-info border border-info" value="<?php echo $setting['line']; ?>">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">
                                    ข้อความแสดงหลังผู้ใช้งานกดซื้อ
                                </label>
                                <input name="text" autocomplete="off" class="form-control bg-dark text-info border border-info" value="<?php echo $setting['text']; ?>">
                            </div>
                            <center><button type="submit" class="btn btn-success mt-4">บันทึกข้อมูล</button></center>
                        </form>
                        <hr>
                        <center>
                            <h5>
                                สถานะร้านค้า
                            </h5>
                            <?php
                            if($setting['status'] == "on"){
                                echo '<a href="action/action.php?status" class="btn btn-danger">ปิดร้าน</a>';
                            }else{
                                echo '<a href="action/action.php?status" class="btn btn-success">เปิดร้าน</a>';
                            }
                            ?>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card bg-dark text-light mt-4">
                    <div class="card-header">
                        แก้ไขภาพ
                    </div>
                    <div class="card-body">
                        <div class="mt-2 text-center">
                            <form action="action/image.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="bg">
                                <label class="form-label">
                                    ภาพหน้าปกเวลา (ภาพจะโชว์ตอนส่งลิงก์หรือแชร์ลิงค์)
                                </label>
                                <input type="hidden" name="editimg" value="web">
                                <input type="file" name="upload" required class="form-control bg-dark text-info border border-info" value="">
                                <button class="btn btn-success mt-1 float-right" type="submit">Save</button>
                            </form>
                        </div>
                        <div class="mt-2 text-center">
                            <form action="action/image.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="img1">
                                <label class="form-label">
                                    แก้ไขภาพที่ 1 ในหน้าแรก ขนาดควรเป็น 1280 x 720 หรือ 1920 x 1080
                                </label>
                                <input type="hidden" name="editimg" value="1">
                                <input name="upload" type="file" required class="form-control bg-dark text-info border border-info">
                                <button class="btn btn-success mt-1 float-right" type="submit">Save</button>
                            </form>
                            <form action="action/image.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="img2">
                                <label class="form-label">
                                    แก้ไขภาพที่ 2 ในหน้าแรก ขนาดควรเป็น 1280 x 720 หรือ 1920 x 1080
                                </label>
                                <input type="hidden" name="editimg" value="2">
                                <input name="upload" type="file" required class="form-control bg-dark text-info border border-info">
                                <button class="btn btn-success mt-1 float-right" type="submit">Save</button>
                            </form>
                            <form action="action/image.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="img3">
                                <label class="form-label">
                                    แก้ไขภาพที่ 3 ในหน้าแรก ขนาดควรเป็น 1280 x 720 หรือ 1920 x 1080
                                </label>
                                <input type="hidden" name="editimg" value="3">
                                <input name="upload" type="file" required class="form-control bg-dark text-info border border-info">
                                <button class="btn btn-success mt-1 float-right" type="submit">Save</button>
                            </form>
                            <hr>
                            <h4>เปลี่ยนรหัสผ่านแอดมิน</h4>
                            <form action="action/action.php" method="POST">
                    <input type="hidden" name="action" value="resetpassword">
                            <div class="mt-1">
                                <label class="form-label">รหัสผ่านเดิม</label>
                                <input class="form-control bg-dark text-info border border-info" name="pass1" type="password">
                            </div>
                            <div class="mt-1">
                                <label class="form-label">รหัสผ่านใหม่</label>
                                <input class="form-control bg-dark text-info border border-info " name="pass2" type="password">
                            </div>
                            <div class="mt-1">
                                <label class="form-label">รหัสผ่านใหม่อีกครั้ง</label>
                                <input class="form-control bg-dark text-info border border-info " name="pass3" type="password">
                            </div>
                            <button class="btn btn-success mt-1" type="submit">เปลี่ยนรหัสผ่าน</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="shop">
                <div class="card bg-dark text-light mt-4">
                    <div class="card-header">
                        จัดการร้านค้า
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                        <form action="action/shop.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="category">
                            <div class="mb-3">
                                <label class="form-label">รูปภาพ</label>
                                <input type="file" name="upload" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ชื่อหมวดหมู่</label>
                                <input type="text" name="name" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">รายละเอียดสินค้า</label>
                                <input type="text" name="description" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ใส่ข้อความที่ต้องการให้ผู้ใช้กรอกข้อมูลก่อนกดยืนยันการซื้อ</label>
                                <input type="text" name="text" class="form-control" autocomplete="off" required>
                            </div>
                            <button class="btn btn-primary input-group-text mt-2" id="basic-addon2">เพิ่มหมวดหมู่สินค้า</button>
                        </form>
                        </div>
                        <hr>
                        <div class="text-center">
                        <label class="form-label">เลือกหมวดหมู่</label>
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                
                              <?php 
                              $category = query("SELECT * FROM market")->fetchAll();
                              if(count($category) < 1){
                              ?>
                              <br>
                                <?php
                                }
                                ?>
                                <?php 
                                    for($i = 0; $i<count($category); $i++){
                                    ?>
                                <div class="col">
                                    <div class="profile-card-2">
                                        <a href="?page=adminshop&id=<?php echo $category[$i]['id']; ?>">
                                            <img style="height: 160px; width: 100%; display: block; object-fit: cover;" src="img/<?php echo $category[$i]['picture']; ?>" class="img img-responsive">
                                            <div class="profile-name"><?php echo $category[$i]['name']; ?></div>
                                            <div class="profile-username"><?php echo $category[$i]['description']; ?></div>
                                        </a>
                                    </div>
                                </div>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card bg-dark text-light mt-4">
                    <div class="card-header">
                        จัดการผู้ใช้
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input class="form-control" aria-describedby="basic-addon2" autocomplete="off" onkeyup="showHint(this.value)" aria-label="Recipient's username" placeholder="Name..." id="txt1">
                            <button class="btn btn-secondary input-group-text" id="basic-addon2">Search</button>
                        </div>
                        <br>
                        <div id="txtHint"></div>
                    </div>
                </div>
            </div>
        </div>