<?php
// Start the session
session_start();
?>
<?php
        if(!isset($_SESSION["name"])){
                header("Location: ../index.php");
        }
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
    <script src="js/func.js"></script>


    <title>Web nghe nhạc </title>
</head>
<body>
        <?php
        if(isset($_POST['search'])){
            $search = $_POST['search'];
            $search = trim($search," ");
        }
        else{
            $search = null;
        }
        ?>
        <nav class="navbar navbar-expand-lg bg-light">
                <div class="container" >
                <a class="navbar-brand" href="index.php">
                        <img width="155" height="50" src="../image/logo1.jpg">
                </a>
                <!-- logo-->
                <div class="navbar-nav mr-auto">
                        <form class="form-inline" action="search.php" method="POST">
                           <input class="form-control" name="search" value="<?php echo $search ?>" type="text" placeholder="Search">
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
                              <a class="nav-link text-secondary" href="#">Bảng xếp hạng</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">Được nghe nhiều nhất</a>
                            </li>

                    </ul>
                </div>
        </nav>
        <div class="container">
            <h2 class="pl-5 mt-2 bg-light">Kết Quả Tìm Kiếm Cho Từ Khóa "<?php echo $search ?>" </h2>
            <?php
                                                require_once "connect.php";

                                                        
                                                        $sql = "select * from baihat where tenbaihat like '%".$search."%' or theloai like '%".$search."%' or casy like '%".$search."%'";  
                                                        $rs_result = mysqli_query($conn, $sql);
                                                        
                                                        while($rowc=mysqli_fetch_array($rs_result))
                                                        {
                                                ?>
                                                        <tr>
                                                        <td>
                                                        <div class="list_song" >
                                                                <div >
                                                                        <div class="left_images">
                                                                                <img  src="../image/logo_music.jpg" class="img" height="70px" width="70px">
                                                                        </div>
                                                                        <p class="song_name">
                                                                                <a title="Nghe bài hát <?php echo $rowc['tenbaihat']; ?>" href="play.php?id=<?php echo $rowc['id'];?>"><?php echo $rowc['tenbaihat']; ?></a> 
                                                                        </p>
                                                                        <p class="song">Trình bày: 
                                                                                <a title="Tìm kiếm bài hát của ca sĩ <?php echo $rowc['casy']; ?>" href=""><?php echo $rowc['casy']; ?></a>
                                                                        </p>
                                                                        <p class="song">Thể loại: 
                                                                                <span class="singer_">
                                                                                        <a href="" title="<?php echo $rowc['theloai']; ?>"><?php echo $rowc['theloai']; ?></a>
                                                                                </span>
                                                                        </p>
                                                                        <p class="song">Lượt nghe: 
                                                                                <span class="singer_">
                                                                                        <?php echo $rowc['luotnghe']; ?></a>
                                                                                </span>
                                                                        </p>
                                                                </div>
                                                        </div>
                                                        </td>
                                                        </tr>
                                                        <hr>
                                                <?php
                                                }
                                                ?>
        </div>

<script>


    

</body>
</html>