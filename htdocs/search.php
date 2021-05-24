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
                        <img width="165" height="55" src="image/logo1.jpg">
                </a>
                <!-- logo-->
                <div class="navbar-nav mr-auto">
                        <form class="form-inline" action="search.php" method="POST">
                           <input class="form-control" name="search" value="<?php echo $search ?>" type="text" placeholder="Search">
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
                        <!-- <li class="nav-item">
                              <a class="nav-link text-secondary" href="#">Bảng xếp hạng</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">Được nghe nhiều nhất</a>
                            </li>
                        -->
                    </ul>
                </div>
        </nav>
        <div class="container">
            <h2 class="pl-5 mt-2 bg-light">Kết Quả Tìm Kiếm Cho Từ Khóa "<?php echo $search ?>" </h2>
            <?php
                                                require_once "connect.php";

                                                        // cau select nay la select cai m search vo db
                                                        $sql = "select * from baihat where tenbaihat like '%".$search."%' or theloai like '%".$search."%' or casy like '%".$search."%'";  
                                                        $rs_result = mysqli_query($conn, $sql);
                                                        // select xong lai load ra thoi
                                                        
                                                        while($rowc=mysqli_fetch_array($rs_result))
                                                        {
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