<?php
    require 'db/connect.php';
    if(isset($_POST['btn-reg'])){
        
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        if(!empty($username) &&!empty($fullname) && !empty($password) && !empty($email) && !empty($address) && !empty($gender)){
            //insert du lieu
            // echo" <pre>";
            // print_r($_POST);

            $sql = "INSERT INTO `tbl_users` (`username`, `fullname`, `password`, `email`, `address`, `gender`) VALUE('$username', '$fullname',md5('$password'), '$email', '$address', '$gender') " ;
            if($conn->query($sql)===TRUE){
                echo"Lưu dữ liệu thành công ";
            }else{
                echo"Loi{$sql}".$conn->error;
            }

        }else{
            echo "Bạn cần nhập thông tin đầy đủ trước khi đăng kí";
        }
    }
?>
<br>
<a href="index.php">Quay lại trang đã đăng kí</a>