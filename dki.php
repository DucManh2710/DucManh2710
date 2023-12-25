<!DOCTYPE html>
<html>
<?php include("./db/connect.php") ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }

    * {
        box-sizing: border-box;
    }

    .container {
        padding: 16px;
        background-color: white;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    a {
        color: dodgerblue;
    }

    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['register'])) {
        $fullname  = $_POST['fullname'];
        $username = $_POST['users'];
        $psw = $_POST['psw'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $select_query = "SELECT * FROM tbl_users WHERE username='$username' OR email='$email'";
        $result = mysqli_query($conn, $select_query);

        if ($result) {
            $rows_count = mysqli_num_rows($result);

            if ($rows_count > 0) {
                echo "<script>alert('Tên người dùng hoặc email đã được sử dụng')</script>";
            } else {
                // mã hóa mật khẩu
                $hashed_password = password_hash($psw, PASSWORD_BCRYPT);
                $insert_query = "INSERT INTO tbl_users (fullname, username, password, gender, email, address) VALUES ('$fullname', '$username', '$hashed_password', '$gender', '$email','$address')";
                $result_qu = mysqli_query($conn, $insert_query);
                echo $insert_query;
                if ($result_qu) {
                    echo "<script>alert('đã đăng ký thành công')</script>";
                } else {
                    echo "<script>alert('Đăng ký thất bại')</script>";
                }
            }
        } else {
            echo "<script>alert('Lỗi truy vấn SQL')</script>";
        }
    }

    ?>
    <form id="from_reg" class="bg-light p-4 my-3" action="dki.php" method="post">
        <div class="container">
            <hr>
            <label for="user"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="username" name="users" id="users" required>

            <label for="user"><b>Tên đầy đủ</b></label>
            <input type="text" placeholder="fullname" name="fullname" id="fullname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="gender"><b>gender</b></label>
            <input type="text" placeholder="Enter gender" name="gender" id="gender" required>

            <label for="address"><b>address</b></label>
            <input type="text" placeholder="Enter address" name="address" id="address" required>
            <hr>
            <p>Bằng cách tạo tài khoản, bạn đồng ý với Điều khoản & Quyền riêng tư của chúng tôi. <a href="#">Xem &
                    Đồng ý</a>.</p>

            <!-- <button type="submit" class="registerbtn">Đăng ký</button> -->
            <input type="submit" name="register" id="" value="Đăng ký">
        </div>

        <div class="container">
            <p>Bạn đã có sẵn 1 tài khoản <a href="./login.php">Đăng nhập</a>.</p>
        </div>
    </form>

</body>

</html>