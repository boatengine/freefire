
        
            
        <div class="card bg-dark text-light mt-4">
                    <div class="card-header">
                        ประวัติการซื้อ 30 รายการล่าสุด
                    </div>
                    <div class="card-body">
                        <table class="table text-light text-center" style="font-size: 14px;">
                            <thead>
                                <tr>
                                <th scope="col">สถานะ</th>
                                <th scope="col">สินค้า</th>
                                <th scope="col">ราคา</th>
                                <th scope="col">ข้อความ</th>
                                <th scope="col">วันที่</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                                $topup = query("SELECT * FROM history order by id DESC")->fetchAll();
                                arsort($topup);
                                if(count($topup) < 30){
                                    $a = count($topup);
                                }else{
                                    $a = 30;
                                }
                                for($i=0;$i < $a;$i++){
                                  if($topup[$i]['username'] == $_SESSION['username']){
                                ?>
                                <tr>
                                  <?php
                                  if($topup[$i]['status'] == "success"){
                                    echo '<td style="color:#2CC200;">สำเร็จ</td>';
                                  }elseif($topup[$i]['status'] == "wait"){
                                    echo '<td style="color:#2CC200;"><div class="spinner-border text-primary" style="width: 18px; height: 18px;" role="status"></div></td>';

                                  }elseif($topup[$i]['status'] == "error"){
                                    echo "<td style='color: #FF1D1D;'>ผิดพลาด!</td>";

                                  }elseif($topup[$i]['status'] == "topup"){
                                    echo "<td style='color: #00E8FF;'>เติมเงินเข้า</td>";
                                    
                                  }
                                  ?>
                                  <td><?php echo $topup[$i]['name']; ?></td> 
                                  <td><?php echo $topup[$i]['price']; ?> บาท</td> 
                                  <td><?php echo $topup[$i]['text']; ?></td> 
                                    <td><?php echo $topup[$i]['date']; ?></td> 
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script>
window.setTimeout(function () {
  window.location.reload();
}, 30000);

</script>