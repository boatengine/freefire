<?php
if($_GET){
    if(isset($_GET['id'])){
        if(count(query("SELECT * FROM market WHERE id=?", [$_GET['id']])->fetchAll()) < 1){
            echo '
            <script>
            location.href = "/?page=admin";
            </script>
            ';
        }
    $market = query("SELECT * FROM market WHERE id=?", [$_GET['id']])->fetch()['name'];

?>

        <div class="card bg-dark text-light mt-4">
            <div class="card-header">
                สินค้าของ: <?php echo $market; ?>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card bg-secondary text-light text-center">
                            <div class="card-header">
                                เพิ่มสินค้า
                            </div>
                            <div class="card-body">
                                <form action="action/shop.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="addshop" value="<?php echo $_GET['id']; ?>">
                                    <div class="mt-2">
                                        <label class="form-label">ภาพ</label>
                                        <input class="form-control" autocomplete="off" type="file" name="upload" required>
                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label">ชื่อ</label>
                                        <input class="form-control" autocomplete="off" name="name" type="text" required>
                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label">ราคา</label>
                                        <input class="form-control" autocomplete="off" name="price" type="number" required>
                                    </div>
                                    <div class="mt-2 d-grid gap-2">
                                        <button type="submit" class="btn btn-warning">เพิ่ม</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                                
                    <?php 
                              $shop = query("SELECT * FROM shop")->fetchAll();
                              if(count($shop) < 1){
                              ?>
                                <?php
                                }
                                ?>
                                <?php 
                                    for($i = 0; $i<count($shop); $i++){
                                        if($shop[$i]['market'] == $_GET['id']){
                                    ?>
                    <div class="col">
                        <div class="card-sl" style="width: 100%;">
                            <div class="card-image">
                                <img style="height: 160px; width: 100%; display: block; object-fit: cover;" src="img/<?php echo $shop[$i]['picture']; ?>">
                            </div>
                            <form action="action/shop.php" method="post">
                            <input type="hidden" name="edit" value="<?php echo $shop[$i]['id']; ?>">
                            <input type="hidden" name="editid" value="<?php echo $_GET['id']; ?>">
                            <div class="card-heading">
                                <input class="form-control" name="name" type="text" autocomplete="off" value="<?php echo $shop[$i]['name']; ?>">
                            </div>
                            <div class="card-text">
                                <input class="form-control" name="price" type="number" value="<?php echo $shop[$i]['price']; ?>">
                                
                            </div>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                            <a href="action/shop.php?delete=<?php echo $shop[$i]['id']; ?>&id=<?php echo $_GET['id']; ?>" class="btn btn-danger">ลบ</a>

                            </div>
                            </form>
                        </div>
                    </div>

                                    <?php }} ?>
                </div>
            </div>
        </div>

        <div class="card bg-dark mt-4 text-center">
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id">ลบสินค้าและหมวดหมู่ออก</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">กรุณายืนยัน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ข้อมูลในร้านค้า <strong><?php echo $market; ?></strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-danger" href="action/shop.php?deleteshop=<?php echo $_GET['id']; ?>">ลบทันที</a>
                </div>
                </div>
            </div>
        </div>
<?php }else{
    echo '
    <script>
    location.href = "/?page=admin";
    </script>
    ';
}
} ?>