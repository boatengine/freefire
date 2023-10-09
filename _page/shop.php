<?php
if($_GET){
    if(isset($_GET['id'])){
        if(count(query("SELECT * FROM market WHERE id=?", [$_GET['id']])->fetchAll()) < 1){
            echo '
            <script>
            location.href = "/?page=selectshop";
            </script>
            ';
        }
        $text = query("SELECT * FROM market WHERE id=?", [$_GET['id']])->fetch()['text'];
?>

        <div class="container mt-4">
            <div class="row">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        เลือกซื้อ
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            
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
                                    <div class="card-heading">
                                        <?php echo $shop[$i]['name']; ?>
                                    </div>
                                    
                                    <div class="card-text">
                                        ราคา: <?php echo $shop[$i]['price']; ?> บาท
                                    </div>
                                        <a onclick="shop<?php echo $shop[$i]['id']; ?>()" class="card-button">🛒ซื้อสินค้า</a>

                                        <script>
                                      function shop<?php echo $shop[$i]['id']; ?>(){
                                        Swal.fire({
                                        title: '<?php echo $text; ?>',
                                        input: 'text',
                                        inputAttributes: {
                                            autocapitalize: 'off'
                                        },
                                        showCancelButton: true,
                                        confirmButtonText: 'Confirm',
                                        showLoaderOnConfirm: true,
                                        preConfirm: (text) => {
                                            if(text == ""){
                                            Swal.fire(
                                                'Error!',
                                                `กรุณากรอกข้อมูลให้ถูกต้อง!`,
                                                'error'
                                                )
                                            }else{
                                            $.post("action/shop.php", {uid: `${text}`}).done(
                                                function(data){
                                                Swal.fire({
                                                    title: `( ${data} )`,
                                                    text: `กรุณายืนยันท่านต้องการจะซื้อ "<?php echo $shop[$i]['name']; ?>" ราคา <?php echo $shop[$i]['price']; ?> บาท`,
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Yes, buy now!'
                                                    }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        location.href = "action/shop.php?buy=<?php echo $shop[$i]['id']; ?>";
                                                    }
                                                    })
                                                }
                                            );
                                                                            
                                            

                                            }
                                        },
                                        })
                                      
                                      }
                                    </script>
                                </div>
                            </div>
        
                                                <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

                                                <?php }else{

echo '
<script>
location.href = "/?page=selectshop";
</script>
';
                                                }
                                            }else{
                                                
            echo '
            <script>
            location.href = "/?page=selectshop";
            </script>
            ';
                                            } ?>