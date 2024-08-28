<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            position: relative;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px 0 30px 0;
        }


        input,
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin: 5px 0;
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
        }

        input:hover,
        .btn:hover {
            opacity: 1;
        }


        .fb {
            background-color: #3B5998;
            color: white;
        }

        .twitter {
            background-color: #55ACEE;
            color: white;
        }

        .google {
            background-color: #dd4b39;
            color: white;
        }


        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }


        .col {
            float: left;
            width: 50%;
            margin: auto;
            padding: 0 50px;
            margin-top: 6px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        .vl {
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            border: 2px solid #ddd;
            height: 175px;
        }


        .vl-innertext {
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 50%;
            padding: 8px 10px;
        }


        .hide-md-lg {
            display: none;
        }


        .bottom-container {
            text-align: center;
            background-color: #666;
            border-radius: 0px 0px 4px 4px;
        }


        @media screen and (max-width: 650px) {
            .col {
                width: 100%;
                margin-top: 0;
            }

            .vl {
                display: none;
            }

            .hide-md-lg {
                display: block;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <?php
    include("connect.php");

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select_query = "SELECT * FROM tbl_users WHERE username='$username'";
        $result = mysqli_query($conn, $select_query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                if (password_verify($password, $row['password'])) {
                    echo "<script>alert('Đăng nhập thành công')</script>";
                    header("Location: index.html");
                } else {
                    echo "<script>alert('Mật khẩu không đúng')</script>";
                }
            } else {
                echo "<script>alert('Tên người dùng không tồn tại')</script>";
            }
        } else {
            echo "<script>alert('Lỗi truy vấn SQL')</script>";
        }
    }

    ?>
    <div class="container">
        <form action="login.php" method="post">
            <div class="row">
                <h2 style="text-align:center">Login with Social Media or Manually</h2>
                <div class="vl">
                    <span class="vl-innertext">or</span>
                </div>

                <div class="col">
                    <a href="#" class="fb btn">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                    </a>
                    <a href="#" class="twitter btn">
                        <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                    </a>
                    <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                        </i> Login with Google+
                    </a>
                </div>

                <div class="col">
                    <div class="hide-md-lg">
                        <p>Or sign in manually:</p>
                    </div>

                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login" name="login">
                </div>
            </div>
        </form>
    </div>

    <div class="bottom-container">
        <div class="row">
            <div class="col">
                <a href="./form_dki.php" style="color:white" class="btn">Đăng Ký</a>
            </div>
            <div class="col">
                <a href="#" style="color:white" class="btn">Quên mật khẩu?</a>
            </div>
        </div>
    </div>

</body>

</html>