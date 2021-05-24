<?php
// Start the session
session_start();
if(isset($_SESSION['name'])){
        if ($_SESSION["name"] != "admin"){
                header("Location: user/index.php");
            }
            else{
                header("Location: admin/index.php");
            }
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="js/func.js"></script>


    <title>Web nghe nhạc </title>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-light">
                <div class="container" >
                <a class="navbar-brand" href="index.php">
                    <img width="165" height="55" src="image/logo1.jpg">
                </a>
                <!-- logo-->
                <div class="navbar-nav mr-auto">
                        <form class="form-inline" action="search.php" method="POST">
                           <input class="form-control" name= "search" type="text" placeholder="Search">
                           <button class="btn" type="submit"><img src="image/search.svg"></button>
                        </form>
                </div>

    
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg mr-2" data-toggle="modal" data-target="#login">Đăng nhập</button>

                <!-- Modal -->
                <div class="modal fade" id="login" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h4 class="modal-title">Đăng nhập</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                
                                        </div>
                                        <div class="modal-body">
                                                <form action="login.php" method="POST">
                                                        <div class="form-group">
                                                                <label for="username_lg">User name</label>
                                                                <input type="text" class="form-control" id="username_lg"name="username_lg" placeholder="Your username">
                                                                
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="password_lg">Password</label>
                                                                <input type="password" class="form-control"name ="password_lg"  id="password_lg" placeholder="Your password">
                                                        </div>
                                                        
                                                
                                        </div>
                                        <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" >Đăng nhập</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                        </div>
                                                </form>
                                </div>
                        
                        </div>
                </div>

                <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#signup">&nbsp Đăng kí &nbsp </button>

                <!-- Modal -->
                <div class="modal fade" id="signup" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h4 class="modal-title">Đăng kí</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                
                                        </div>
                                        <div class="modal-body">
                                                <form action="/signup.php" method="POST">
                                                        <small id ="error_su" style="color: red;"></small>
                                                        <div class="form-group">
                                                                <label for="username_su">User name</label>
                                                                <input type="text" class="form-control" id="username_su" name="username_su" placeholder="Your username">                                         
                                                        </div> 
                                                        <div class="form-group">
                                                                        <label for="password_su">Password</label>
                                                                        <input type="password" class="form-control" id="password_su"name="password_su" placeholder="Your password">         
                                                        </div>
                                                        <div class="form-group">
                                                                        <label for="againPassword_su">Password lần 2</label>
                                                                        <input type="password" class="form-control"name="againPassword_su" id="againPassword_su" placeholder="Your password again">           
                                                        </div>
                                                        <div class="form-group">
                                                                        <label for="email_su">Email:</label>
                                                                        <input type="email" class="form-control"name="email_su" id="email_su" placeholder="Your email">                                         
                                                        </div> 
                                               
                                        </div>
                                                <div class="modal-footer">
                                                        <button type="submit" name ="submit" class="btn btn-primary" onclick="signup(event)" >Đăng kí</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                                </div>

                                                </form> 
                                </div>
                        
                        </div>
                </div>

        </nav>

        <nav class="second-nav navbar-expand-lg " >
            <div class="container">
                    <ul class="navbar-nav  ">
                            <li class="nav-item active">
                              <a class="nav-link text-secondary" href="#" >Trang chủ </a>
                            </li>


                    </ul>
                </div>
        </nav>
        <div class="container">
                <div class="row">

                    <div class="col-lg-3" >
                            <div class="card" style="padding-top: 10px;padding-left: 15px;">
                                    <h3><img width="40" src="image/music.png" alt=""> Chủ đề hot</h3>
                                    <div class="card-title">
                                            <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="/?theloai=Viet">Hôm Nay Nghe Gì?</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Viet">Love Songs</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Au">Nhạc Quốc Tế</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Viet">Nhạc Giáng Sinh</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Rap">Nhạc Hot Rap Việt</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Viet">Nhạc Hot Việt</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Viet">Nhạc Sàn</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Viet">Nhạc Việt Mới</a></li>
                                                    <li class="list-group-item"><a href="/?theloai=Han">Nhạc Hàn Quốc</a></li>
                                            </ul>
                                    </div>

                            </div>
                            <div class="card" style="padding-top: 10px;padding-left: 15px; margin-top: 10px;">
                                    <h3><img width="40" src="image/singer.png" alt=""> Ca sỹ hot</h3>
                                    <div class="card-title">
                                            <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="/?casy=mtp">Sơn Tùng MTP</a></li>
                                                    <li class="list-group-item"><a href="/?casy=phuc">Đức Phúc</a></li>
                                                    <li class="list-group-item"><a href="/?casy=noo">Noo Phước Thịnh</a></li>
                                                    <li class="list-group-item"><a href="/?casy=AP">Quân AP</a></li>
                                                    <li class="list-group-item"><a href="/?casy=911">911</a></li>
                                                    <li class="list-group-item"><a href="/?casy=bang">Big Bang</a></li>
                                                    <li class="list-group-item"><a href="/?casy=blackpink">BlackPink</a></li>

                                            </ul>
                                    </div>

                            </div>
                    </div>
                    <div class="col-lg-6  ">
                        <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand">
                                                        <img width="25" height="25" src="image/bathatmoi.svg">
                                                </a>
                                                <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                        <a class="nav-link">Bài hát mới </a>
                                                        </li>
                                                </ul>
                                                
                        </nav>   
                               
                                 
                                            <?php
                                                require_once "connect.php";
                                                        // gioi han 9 bai hat moi lan load
                                                        $limit = 9;  
                                                        // $page la luc phan trang, mac dinh $page la 1
                                                        if (isset($_GET["page"])) { 
                                                                $page  = $_GET["page"]; } 
                                                        else { 
                                                                $page=1;};  
                                                        $start_from = ($page-1) * $limit; 
                                                        // cau lenh select limit 
                                                        $sql = "SELECT * FROM baihat ORDER BY id ASC LIMIT $start_from, $limit";  
                                                        // $theloai la cai o "Chu de hot"
                                                        if (isset($_GET["theloai"])){
                                                                $theloai = $_GET["theloai"];
                                                                $sql = "SELECT * FROM baihat WHERE theloai like '%" . $theloai . "%'  ORDER BY id ASC LIMIT $start_from, $limit"; 
                                                        
                                                        // $cáy la o "Ca sy"
                                                        }
                                                        if (isset($_GET["casy"])){
                                                                $theloai = $_GET["casy"];
                                                                $sql = "SELECT * FROM baihat WHERE casy like '%" . $theloai . "%'  ORDER BY id ASC LIMIT $start_from, $limit"; 
                                                                
                                                
                                                        }
                                                         
                                                        
                                                        
                                                        $rs_result = mysqli_query($conn, $sql);
                                                        
                                                        while($rowc=mysqli_fetch_array($rs_result))
                                                        {
                                                        // khuc nay select xong bat dau load cac bai hat ra
                                                ?>
                                                        <tr>
                                                        <td>
                                                        <div class="list_song" >
                                                                <div >
                                                                        <div class="left_images">
                                                                                <img  src="image/logo_music.jpg" class="img" height="70px" width="70px">
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
                                                                                        <?php echo $rowc['luotnghe']; ?></li>
                                                                                </span>
                                                                        </p>
                                                                </div>
                                                        </div>
                                                        </td>
                                                        </tr>
                                                        <hr>
                                                <?php
                                                }
                                                // la khuc nay load dc 1 bai hat
                                                ?>
                                                
                         <?php  
                         // khuc nay la phan trang ne
                        $sql = "SELECT COUNT(id) FROM baihat";
                        // select so bai hat trong db
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
                        // $total_records la tong so bai hat vua select o tren
                        $total_records = $row[0]; 
                        // $total_pages la so trang  
                        $total_pages = ceil($total_records / $limit);  
                         
                        $start = ($page - $limit_page > 0) ? $page  - 1 : 1;
                        $end = ($page + $limit_page < $total_pages) ? $page + 1 : $total_pages;

                        ?>
                        <ul class='pagination float-right '>
                        <?php
                        if (isset($_GET["theloai"])){
                                $theloai = $_GET["theloai"];
                                $pagLink = '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/?theloai='.$theloai.'&page=' . ($page - 1 ) . '">Previous</a></li>';
                        }
                        elseif (isset($_GET["casy"])){
                                $theloai = $_GET["casy"];
                                $pagLink = '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/?theloai='.$theloai.'&page=' . ($page - 1 ) . '">Previous</a></li>';
                        }
                        else{
                                $pagLink = '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/?page=' . ($page - 1 ) . '">Previous</a></li>';
                        }
                        
                        
                        for ($i = $start ; $i <= $end; $i++ ) { 
                                // cai activate nay la luc o no page nao thi page do no sang' len (co mau` xanh blue)
                                $class  = ( $page == $i ) ? "active" : "";
                                if (isset($_GET["theloai"])){
                                        $theloai = $_GET["theloai"];
                                        $pagLink .= "<li class='page-item mr-2 ".$class."'><a class='page-link' href='/?theloai=".$theloai."&page=".$i."'>". $i . "</a></li>";
                                        
                                }
                                elseif (isset($_GET["casy"])){
                                        $theloai = $_GET["casy"];
                                        $pagLink .= "<li class='page-item mr-2 ".$class."'><a class='page-link' href='/?casy=".$theloai."&page=".$i."'>". $i . "</a></li>";
                                        
                                }
                                else{
                                        $pagLink .= "<li class='page-item mr-2 ".$class."'><a class='page-link' href='/?&page=".$i."'>". $i . "</a></li>";
                                }
                                
                        };  
                        $class = ($page == $total_pages) ? "disabled" : "";
                        if (isset($_GET["theloai"])){
                                $theloai = $_GET["theloai"];
                                $pagLink .= '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/?theloai='.$theloai.'&page=' . ($page + 1 ) . '">Next</a></li>';
                        }
                        elseif (isset($_GET["casy"])){
                                $theloai = $_GET["casy"];
                                $pagLink .= '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/?theloai='.$theloai.'&page=' . ($page + 1 ) . '">Next</a></li>';
                        }
                        else{
                                $pagLink .= '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/?page=' . ($page + 1 ) . '">Next</a></li>';
                        }
                        echo $pagLink;  
                        $conn->close();
                        ?>       
                        </ul>
                            
                    </div>
                    <div class="col-lg-3 bg-light" >
                            <nav class="navbar navbar-expand-lg  ">
                                    
                                            <a class="navbar-brand ">
                                                    <img class="float-left" width="25" height="25" src="image/hot.png">
                                                </a>
                                                <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                          <a class="nav-link">BXH Bài Hát </a>
                                                        </li>
                                                </ul>

                                   
    
                            </nav>
                                                <?php 
                                                include("connect.php");
                                                        // cho nay la bang xep hang
                                                        // select theo luot nghe cua bai hat
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