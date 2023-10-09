        <div class="container mt-4">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="card bg-dark text-light text-center" style="width: 25rem;">
                        <div class="card-body">
                            <h4>สมัครสมาชิก</h4><hr>
                            <form action="action/account.php" method="post">
                                <input type="hidden" name="action" value="register">
                                Username ชื่อผู้ใช้
                                <input type="text" name="username" class="form-control bg-dark text-light border border-info rounded-pill" autocomplete="off" required placeholder="Username. . . ">
                                Password รหัสผ่าน
                                <input type="password" name="password" class="form-control bg-dark text-light border border-info rounded-pill" autocomplete="off" required placeholder="Password. . . ">
                                Re-Password ยืนยันรหัสผ่าน
                                <input type="password" name="re-password" class="form-control bg-dark text-light border border-info rounded-pill" autocomplete="off" required placeholder="Re-Password. . . ">
                            <br><div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success rounded-pill" style="background-color: #4CAF50;">สมัครสมาชิก</button>
                            </div>
                            </form><br>
                            <p>หากมีบัญชีอยู่แล้ว <a href="?page=login">เข้าสู่ระบบ</a></p>
                        </div>
                    </div>
                </div>
                </div>
		    </div>
        </div>