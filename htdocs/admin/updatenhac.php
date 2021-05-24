<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="../js/func.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
                <div class="container" >
                <a class="navbar-brand" href="index.php">
                    <img width="155" height="50" src="../image/logo1.jpg">
                </a>
                <!-- logo-->
                <div class="navbar-nav mr-auto">
                        <form class="form-inline" action="search.php" method="POST">
                           <input class="form-control" name= "search" type="text" placeholder="Search">
                           <button class="btn" type="submit"><img src="../image/search.svg"></button>
                        </form>
                </div>


                <div class="dropdown">
                        <a style="color: blue"> Xin Chào: <?php echo $_SESSION["name"] ?></a>
                        <div class="dropdown-content">
                                <a href="#"> Sửa thông tin</a>
                                <a href="#"> Đăng Xuất</a>
                        </div>
                </div>
        </nav>

        <nav class="second-nav navbar-expand-lg " >
            <div class="container">
                    <ul class="navbar-nav  ">
                            <li class="nav-item active">
                              <a class="nav-link text-secondary" href="#" >Trang chủ </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-secondary" href="upload.php">Upload</a>
                            </li>


                    </ul>
                </div>
        </nav>
        <div class="container">
            <?php 
                require_once('connect.php');
                if (isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * from baihat where id = $id";
                    $result = mysqli_query($conn, $sql);

                    $result = mysqli_fetch_assoc($result);
                     
                    
                   
                }
                
            ?>
            <h2 class="mt-2 ml-2">Update bài hát</h2>
            <form name="form1" method="post" enctype="multipart/form-data" action="">
                    <input class="form-control form-control-lg  mb-3" name="tenbaihat" type="text" placeholder="Tên bài hát", value = "<?php echo $result['tenbaihat'];  ?>">
					<input class="form-control form-control-lg mb-3" name="casy" type="text" placeholder="Ca sỹ", value = "<?php echo $result['casy'];  ?>">
					<select class="form-control form-control-lg mb-3" name="theloai">
						<option <?php if(strcmp($result['theloai'],'Việt Nam')==0) echo 'selected'  ?> value="Việt Nam">Nhạc Việt</option>
						<option <?php if(strcmp($result['theloai'],"Âu Mỹ")==0) echo 'selected' ?> value="Âu Mỹ">Âu Mỹ</option>
						<option <?php if(strcmp($result['theloai'], "Hàn Quốc")==0) echo 'selected' ?> value="Hàn Quốc">Hàn Quốc</option>
					    <option <?php if(strcmp($result['theloai'], "Rap")==0) echo 'selected' ?> value="Rap">Rap</option>
					</select>
                    <input type = "hidden" name="idx" value = "<?php echo $id ?>">
                    <input class="bg-primary btn text-white" type="submit" name="up" value="Update">
            </form>
        </div>
        <?php
            if(isset($_POST['up'])){
                require_once('connect.php');
                $tenbaihat = $_POST['tenbaihat'];
                $casy = $_POST['casy'];
                $theloai = $_POST['theloai'];
                $idx = $_POST['idx'];
                $result = mysqli_query($conn,"UPDATE baihat set tenbaihat='$tenbaihat' , casy = '$casy', theloai = '$theloai' where id='$idx'");
                if(mysqli_affected_rows($conn)== 1 ){ 
                    $msg = '<script type="text/javascript">
                    var r = confirm("' ."Thay đổi thông tin bài hát thành công" . '");
                    if (r==true)
                    {
                        history.go(-2);
                    }
                    else{
                        history.go(-2); 
                    }
                    
                    </script>';
                    echo $msg;
                 }
                 
            }
            

        
        
        
        ?>
</body>
</html>