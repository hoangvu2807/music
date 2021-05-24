<?php 
    require_once("connect.php");
    $username = $_POST["username_su"];
    $password = $_POST["password_su"];
    $email    = $_POST["email_su"];

    $sql = "insert into user(user,password,email) values('$username','$password','$email')";

    $query = "SELECT user FROM user WHERE user ='$username';";
    $result = $conn->query($query) or die(mysqli_error());
    // neu ma select  ra 1 dong` nao het thi tuc la co ten tai khoan do'
    if (mysqli_num_rows($result) != 0)
        {
            $msg = '<script type="text/javascript">
            var r = confirm("' .'Tên tài khoản không khả dụng' . '");
            if (r==true)
            {
                window.history.back();
            }
            else{
                window.history.back();
            }
            
            </script>';
            echo $msg;
        }
    else{

        if ($conn->query($sql) === FALSE) {
            die("Error: " . $sql . $conn->error);
        // o tren no check neu ma chua co tai khoan thì nó insert vô
        } else {
            
            $msg = '<script type="text/javascript">
            var r = confirm("' .'Bạn đã tạo tài khoản thành công' . '");
            if (r==true)
            {
                window.history.back();
            }
            else{
                window.history.back();
            }
            
            </script>';
            echo $msg;
    
        }
    }
    $conn->close();
?>