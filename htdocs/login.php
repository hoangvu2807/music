<?php
// Start the session
session_start();
?>
<?php
    require_once("connect.php");
    $username = $_POST["username_lg"];
    $password = $_POST["password_lg"];
    $sql = "SELECT * FROM user WHERE user = '$username' and password = '$password';";
    $result = $conn->query($sql) ;
    if (mysqli_num_rows($result) > 0){
        $_SESSION["name"] =  $username;
        if ($_SESSION["name"] != "admin"){
            header("Location: user/index.php");
        }
        else{
            header("Location: admin/index.php");
        }
    }
    else{
        $msg = '<script type="text/javascript">
        var r = confirm("' .'Tên đăng nhập hoặc mật khẩu sai' . '");
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
    $conn->close();
?>