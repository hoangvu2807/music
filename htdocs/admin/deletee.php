<?php
    require_once('connect.php');
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM  baihat where id = $id";
        if (mysqli_query($conn, $sql)) {
            $msg = '<script type="text/javascript">
            var r = confirm("' .'Xóa bài hát thành công' . '");
            if (r==true)
            {
                window.history.back();
            }
            else{
                window.history.back();
            }
            
            </script>';
            echo $msg;
        } else {
            $msg = '<script type="text/javascript">
            var r = confirm("' .'Xóa bài hát thất bại' . '");
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
    


?>