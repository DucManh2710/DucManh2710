<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <form action="reg.php" method="post">
            <div class="modal-close js-modal-close">
                <i class='bx bx-x'></i>
            </div>
            <header class="modal-header">
                ĐĂNG KÍ
            </header>

            <div class="modal-body">
                <div>
                <label for="fullname" class="modal-label">
                    Họ và tên
                </label>
                <input id="fullname" name="fullname" type="text" class="modal-input" placeholder="Họ và tên" ><br>
                </div>

                <div>
                <label for="username"  class="modal-label">
                    Tên đăng nhập
                </label>
                <input id="username" name="username" type="text" class="modal-input" placeholder="Tên đăng nhập"><br>
                </div>

                <div>
                <label for="password"  class="modal-label">
                    
                    Mật khẩu
                </label>
                <input id="password" name="password" type="password" class="modal-input" placeholder="Mật khẩu"><br>
                </div>

                <div>
                <label for="email" class="modal-label">
                    Email
                </label>
                <input id="email" name="email" type="email" class="modal-input" placeholder="email"><br>
                </div>
                <div>
                    <label for="">Giới tính</label>
                    <div>
                        <div>
                        <input type="checkbox" name="gender" checked id="male" value="male">
                        <label for="">Nam</label>
                        <input type="checkbox" name="gender" checked id="female" value="female">
                        <label for="">Nữ</label><br>
                        </div>
                    </div>
                </div>
                <div>
                <label for="address" class="modal-label">
                    Địa chỉ
                </label>
                <input id="address" name="address" type="text" class="modal-input" placeholder="Địa chỉ"><br>
                </div>
                <div>
                <input type="submit" value="Dang ki" name="btn-reg">
                </div>

            </div>

            </form>
            
        </div>
    </div>
</body>
</html>