<script>
    
    <?php if(isset($_SESSION['topup_error'])){ ?>
        Swal.fire(
            'ผิดพลาด!',
            'กรุณาตรวจสอบลิงก์ หรือหากยังไม่ได้โปรดติดต่อแอดมิน!',
            'error'
          )
            <?php } ?>
            <?php if(isset($_SESSION['json_error'])){ ?>
        Swal.fire(
            'ผิดพลาด!',
            'ลิงค์ใช้งานไม่ได้ กรุณาตรวจสอบใหม่อีกครั้ง!',
            'error'
          )
            <?php } ?>
            <?php if(isset($_SESSION['use_already'])){ ?>
        Swal.fire(
            'ผิดพลาด!',
            'ลิงค์ถูกใช้งานไปแล้ว!',
            'error'
          )
            <?php } ?>
            <?php if(isset($_SESSION['price_success'])){ ?>
        Swal.fire(
            'เติมเงินสำเร็จ!',
            'เติมเงินจำนวน <?php echo $_SESSION['price_success']; ?> บาท!',
            'success'
          )
            <?php } 
            
            unset($_SESSION['price_success']);
            unset($_SESSION['topup_error']);
            unset($_SESSION['use_already']);
            unset($_SESSION['json_error']);
            ?>
            
            <?php if(isset($_SESSION['price_error'])){ ?>
        Swal.fire(
            'ผิดพลาด!',
            'กรุณาตรวจสอบจำนวนเงิน!',
            'error'
          )
            <?php 
          
          unset($_SESSION['price_error']);
          } ?>
            
          <?php if(isset($_SESSION['buy_success'])){ ?>
      Swal.fire(
          'สำเร็จ!',
          '<?php echo $setting['text']; ?>',
          'success'
        )
          <?php 
        
        unset($_SESSION['buy_success']);
        } ?>

            <?php if(isset($_SESSION['re-pass'])){ ?>
            Swal.fire(
              'ผิดพลาด',
              'รหัสผ่านไม่ตรงกัน',
              'error'
            );
            <?php
            }
            unset($_SESSION['re-pass']);
            ?>

            <?php if(isset($_SESSION['register-null'])){ ?>
            Swal.fire(
              'ผิดพลาด',
              'กรุณากรอกข้อมุูลให้ถูกต้อง',
              'error'
            );
            <?php
            }
            unset($_SESSION['register-null']);
            ?>

            <?php if(isset($_SESSION['register_success'])){ ?>
            Swal.fire(
              'สมัครสำเร็จ',
              'สมัครสมาชิกสำเร็จกรุณาเข้าสู่ระบบก่อนทำรายการ',
              'success'
            );
            <?php
            }
            unset($_SESSION['register_success']);
            ?>

            <?php if(isset($_SESSION['login_success'])){ ?>
            Swal.fire(
              'เข้าสู่ระบบ',
              'เข้าสู่ระบบสำเร็จ',
              'success'
            );
            <?php
            }
            unset($_SESSION['login_success']);
            ?>

            <?php if(isset($_SESSION['login_error'])){ ?>
            Swal.fire(
              'เข้าสู่ระบบ',
              'ไม่สามารถเข้าสู่ระบบได้ ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
              'error'
            );
            <?php
            }
            unset($_SESSION['login_error']);
            ?>

<?php 
if(isset($_SESSION['reset1'])){
  echo '
  Swal.fire(
    "Error",
    "รหัสผ่านเดิมไม่ถูกต้อง!",
    "error"
  );
  ';
  unset($_SESSION['reset1']);
}
if(isset($_SESSION['reset2'])){
  echo '
  Swal.fire(
    "Error",
    "รหัสผ่านไม่ตรงกัน!",
    "error"
  );
  ';
  unset($_SESSION['reset2']);
}
if(isset($_SESSION['reset3'])){
  echo '
  Swal.fire(
    "Success",
    "เปลี่ยนรหัสผ่านเรียบร้อย!",
    "success"
  );
  ';
  unset($_SESSION['reset3']);
}
if(isset($_SESSION['reset4'])){
  echo '
  Swal.fire(
    "Error",
    "ติดต่อฐานข้อมูลไม่ได้!",
    "error"
  );
  ';
  unset($_SESSION['reset4']);
}
if(isset($_SESSION['savedata'])){
  echo '
  Swal.fire(
    "บันทึก",
    "บันทึกข้อมูลเรียบร้อย!",
    "success"
  );
  ';
  unset($_SESSION['savedata']);
}

?>
</script>