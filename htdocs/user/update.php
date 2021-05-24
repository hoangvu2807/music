<?php 
        require_once("connect.php");
        $user = $_POST["user"];
        $password = $_POST["password_1"];
        $email    = $_POST["email"];
        $result = mysqli_query($conn,"UPDATE user set password='$password' , email = '$email' where user='$user'");

            $msg = '<script type="text/javascript">
            var r = confirm("' ."Thay đổi thông tin tài khoản thành công" . '");
            if (r==true)
            {
                window.history.back();
            }
            else{
                window.history.back();
            }
            
            </script>';
            echo $msg;
        $conn ->close();

?>