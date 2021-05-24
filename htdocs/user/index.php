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
    <script src="../js/func.js"></script>


    <title>Web nghe nhạc </title>
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
                                <a class="bg-circle" data-toggle="modal" data-target="#login" href="#"> Sửa thông tin</a>
                                  
                                




                                      
                                <a href="logout.php"> Đăng Xuất</a>
                        </div>
                </div>
        </nav>
        <!-- start -->
        <!-- Modal -->
        <div class="modal fade" id="login" role="dialog">
                                                        <div class="modal-dialog">
                                                        
                                <!-- Modal content-->
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h4 class="modal-title">Sửa thông tin</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                
                                        </div>
                                        <div class="modal-body">
                                                <?php
                                                        require_once("connect.php"); 
                                                        
                                                        $sql = "SELECT email FROM user where user = '{$_SESSION['name']}'";
                                                        
                                                        $rs_result = mysqli_query($conn, $sql); 
                        
                                                        $row = mysqli_fetch_row($rs_result);  
                                                        $email = $row[0];
                                                        ?>
                                                
                                                <form action="update.php" method="POST">
                                                <small id ="error_su" style="color: red;"></small>
                                                        <div class="form-group">
                                                                <label for="username_lg">Password:</label>
                                                                <input type="password" class="form-control" id="password_1"name="password_1" placeholder="Your password">
                                                                
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="password_lg">Password Again:</label>
                                                                <input type="password" class="form-control"name ="password_2"  id="password_2" placeholder="Your password again">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="password_lg">Email:</label>
                                                                <input type="email" class="form-control"name ="email"  id="email" value="<?php echo $email ?>">
                                                        </div>
                                                        <input type = "hidden" name= "user" id ="user" value = "<?php echo $_SESSION['name'] ?>" >
                                                        
                                                
                                        </div>
                                        <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" onclick="update(event)">Confirm</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                                </form>
                                </div>
                        
                        </div>
                </div>
        <!-- finish -->  
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
                <div class="row">

                    <div class="col-lg-3" >
                            <div class="card" style="padding-top: 10px;padding-left: 15px;">
                                    <h3><img width="40" src="../image/music.png" alt=""> Chủ đề hot</h3>
                                    <div class="card-title">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="/user/?theloai=Viet">Hôm Nay Nghe Gì?</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Viet">Love Songs</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Au">Nhạc Quốc Tế</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Viet">Nhạc Giáng Sinh</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Rap">Nhạc Hot Rap Việt</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Viet">Nhạc Hot Việt</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Viet">Nhạc Sàn</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Viet">Nhạc Việt Mới</a></li>
                                                    <li class="list-group-item"><a href="/user/?theloai=Han">Nhạc Hàn Quốc</a></li>
                                                </ul>
                                    </div>

                            </div>
                            <div class="card" style="padding-top: 10px;padding-left: 15px; margin-top: 10px;">
                                    <h3><img width="40" src="../image/singer.png" alt=""> Ca sỹ hot</h3>
                                    <div class="card-title">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="/user/?casy=mtp">Sơn Tùng MTP</a></li>
                                                    <li class="list-group-item"><a href="/user/?casy=phuc">Đức Phúc</a></li>
                                                    <li class="list-group-item"><a href="/user/?casy=noo">Noo Phước Thịnh</a></li>
                                                    <li class="list-group-item"><a href="/user/?casy=AP">Quân AP</a></li>
                                                    <li class="list-group-item"><a href="/user/?casy=911">911</a></li>
                                                    <li class="list-group-item"><a href="/user/?casy=bang">Big Bang</a></li>
                                                    <li class="list-group-item"><a href="/user/?casy=blackpink">BlackPink</a></li>

                                                </ul>
                                    </div>

                            </div>
                    </div>
                    <div class="col-lg-6  ">
                        <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand">
                                                        <img width="25" height="25" src="../image/bathatmoi.svg">
                                                </a>
                                                <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                        <a class="nav-link">Bài hát mới </a>
                                                        </li>
                                                </ul>
                        </nav>   
                               
                                 
                                            <?php
                                                require_once "connect.php";
                                                $limit = 9;  
                                                if (isset($_GET["page"])) { 
                                                        $page  = $_GET["page"]; } 
                                                else { 
                                                        $page=1;};  
                                                $start_from = ($page-1) * $limit; 
                                                $sql = "SELECT * FROM baihat ORDER BY id ASC LIMIT $start_from, $limit";  
                                                        
                                                if (isset($_GET["theloai"])){
                                                        $theloai = $_GET["theloai"];
                                                        $sql = "SELECT * FROM baihat WHERE theloai like '%" . $theloai . "%'  ORDER BY id ASC LIMIT $start_from, $limit"; 
                                                        
                                        
                                                }
                                                if (isset($_GET["casy"])){
                                                        $theloai = $_GET["casy"];
                                                        $sql = "SELECT * FROM baihat WHERE casy like '%" . $theloai . "%'  ORDER BY id ASC LIMIT $start_from, $limit"; 
                                                        
                                        
                                                }
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
                         <?php  
                        $sql = "SELECT COUNT(id) FROM baihat";
                        if (isset($_GET["theloai"])){
                                $theloai = $_GET["theloai"];
                                
                                $sql = "SELECT COUNT(id) FROM baihat WHERE theloai like '%" . $theloai . "%'"; 
                                
                
                        }
                        if (isset($_GET["casy"])){
                                $theloai = $_GET["casy"];
                                
                                $sql = "SELECT COUNT(id) FROM baihat WHERE casy like '%" . $theloai . "%'"; 
                                
                
                        }
                        
                        $rs_result = mysqli_query($conn, $sql); 
                        
                        $row = mysqli_fetch_row($rs_result);  
                        $limit_page = 1;
                        $class = ($page == 1) ? "disabled" : "";

                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit);  
                        $start = ($page - $limit_page > 0) ? $page  - 1 : 1;
                        $end = ($page + $limit_page < $total_pages) ? $page + 1 : $total_pages;

                        ?>
                        <ul class='pagination float-right '>
                        <?php
                        if (isset($_GET["theloai"])){
                                $theloai = $_GET["theloai"];
                                $pagLink = '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/user/?theloai='.$theloai.'&page=' . ($page - 1 ) . '">Previous</a></li>';
                        }
                        elseif (isset($_GET["casy"])){
                                $theloai = $_GET["casy"];
                                $pagLink = '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/user/?theloai='.$theloai.'&page=' . ($page - 1 ) . '">Previous</a></li>';
                        }
                        else{
                                $pagLink = '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/user/?page=' . ($page - 1 ) . '">Previous</a></li>';
                        }
                        
                        
                        for ($i = $start ; $i <= $end; $i++ ) {  
                                $class  = ( $page == $i ) ? "active" : "";
                                if (isset($_GET["theloai"])){
                                        $theloai = $_GET["theloai"];
                                        $pagLink .= "<li class='page-item mr-2 ".$class."'><a class='page-link' href='/user/?theloai=".$theloai."&page=".$i."'>". $i . "</a></li>";
                                        
                                }
                                elseif (isset($_GET["casy"])){
                                        $theloai = $_GET["casy"];
                                        $pagLink .= "<li class='page-item mr-2 ".$class."'><a class='page-link' href='/user/?casy=".$theloai."&page=".$i."'>". $i . "</a></li>";
                                        
                                }
                                else{
                                        $pagLink .= "<li class='page-item mr-2 ".$class."'><a class='page-link' href='/user/?&page=".$i."'>". $i . "</a></li>";
                                }
                                
                        };  
                        $class = ($page == $total_pages) ? "disabled" : "";
                        if (isset($_GET["theloai"])){
                                $theloai = $_GET["theloai"];
                                $pagLink .= '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/user/?theloai='.$theloai.'&page=' . ($page + 1 ) . '">Next</a></li>';
                        }
                        elseif (isset($_GET["casy"])){
                                $theloai = $_GET["casy"];
                                $pagLink .= '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/user/?theloai='.$theloai.'&page=' . ($page + 1 ) . '">Next</a></li>';
                        }
                        else{
                                $pagLink .= '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/user/?page=' . ($page + 1 ) . '">Next</a></li>';
                        }
                        echo $pagLink;  
                        $conn->close();
                        ?>       
                        </ul>       

                            
                    </div>
                    <div class="col-lg-3 bg-light" >
                            <nav class="navbar navbar-expand-lg  ">
                                    
                                            <a class="navbar-brand ">
                                                    <img class="float-left" width="25" height="25" src="../image/hot.png">
                                                </a>
                                                <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                          <a class="nav-link">BXH Bài Hát </a>
                                                        </li>
                                                </ul>

                                   
    
                            </nav>
                                                <?php 
                                                        include("connect.php");
                                                                $tv="SELECT * FROM baihat ORDER BY luotnghe DESC LIMIT 10";
                                                                $sql= mysqli_query($conn,$tv);
                                                                if(mysqli_num_rows($sql)>0)
                                                                {
                                                                        $i=0;
                                                                        while($row=mysqli_fetch_array($sql))
                                                                {
                                                                $i+=1;
                                                        ?>
                                                                <div class="top_mp3"> 
                                                                <?php if($i>3) echo "<div class='x_1' style='background: #999;'>"; else echo "<div class='x_1' style>"; ?>
		                                                <?php echo $i;?></div>
                                                                <div class="x_2">
                                                                        <a  class = "song_name"href="play.php?id=<?php echo $row['id'];?>" title="<?php echo $row['tenbaihat']; ?>"><?php echo $row['tenbaihat']; ?></a>
                                                                        <a  class = "singer"href="./?mod=bhcasy&ten=<?php echo $row['casy']; ?>" title="Tìm bài hát của <?php echo $row['casy']; ?>" class=""><?php echo $row['casy']; ?></a>
                                                                </div>
                                                                
                                                                </div>

                                                                
                                                                
                                                        <?php 
                                                                } 
                                                        } 
                                                        ?>
                    </div>
                </div>
        </div>

    

<footer class="container-fluid bg-4 text-center">
  <hr>
  <p>© 2019 Copyright</p> 
  <hr>
</footer>


</body>

</html>