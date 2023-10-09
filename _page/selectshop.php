

        <div class="container mt-4">
            <div class="row">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        เลือกหมวดหมู
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                                
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
                                          <a href="?page=shop&id=<?php echo $category[$i]['id']; ?>">
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