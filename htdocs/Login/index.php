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
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="js/func.js"></script>
<style>
    		.second-nav {
			background-color: #F9FADC;
		}
</style>

    <title>Web nghe nhạc </title>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-light">
                <div class="container" >
                <a class="navbar-brand" href="index.html">
                        <img width="155" height="50" src="image/logo1.jpg">
                </a>
                <!-- logo-->
                <div class="navbar-nav mr-auto">
                        <form class="form-inline" action="/somepage">
                           <input class="form-control" type="text" placeholder="Search">
                           <button class="btn" type="submit"><img src="image/search.svg"></button>
                        </form>
                </div>

    
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg mr-2" data-toggle="modal" data-target="#login">Dang nhap</button>

                <!-- Modal -->
                <div class="modal fade" id="login" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h4 class="modal-title">Dang nhap</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                
                                        </div>
                                        <div class="modal-body">
                                                <form action="login.php">
                                                        <div class="form-group">
                                                                <label for="username_lg">User name</label>
                                                                <input type="text" class="form-control" id="username_lg" placeholder="Your username">
                                                                
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="password_lg">Password</label>
                                                                <input type="password" class="form-control" id="password_lg" placeholder="Your password">
                                                        </div>
                                                        
                                                
                                        </div>
                                        <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" >Dang nhap</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                                </form>
                                </div>
                        
                        </div>
                </div>

                <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#signup">&nbsp Dang ki &nbsp </button>

                <!-- Modal -->
                <div class="modal fade" id="signup" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h4 class="modal-title">Dang ki</h4>
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
                                                                        <label for="againPassword_su">Password lan 2</label>
                                                                        <input type="password" class="form-control"name="againPassword_su" id="againPassword_su" placeholder="Your password again">           
                                                        </div>
                                                        <div class="form-group">
                                                                        <label for="email_su">Email:</label>
                                                                        <input type="email" class="form-control"name="email_su" id="email_su" placeholder="Your email">                                         
                                                        </div> 
                                               
                                        </div>
                                                <div class="modal-footer">
                                                        <button type="submit" name ="submit" class="btn btn-primary" onclick="signup(event)" >Dang ki</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <div class="row">

                    <div class="col-lg-3" >
                            <div class="card" style="padding-top: 10px;padding-left: 15px;">
                                    <h3><img width="40" src="image/music.png" alt=""> Chủ đề hot</h3>
                                    <div class="card-title">
                                            <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Hôm Nay Nghe Gì?</li>
                                                    <li class="list-group-item">Love Songs</li>
                                                    <li class="list-group-item">Nhạc Chờ Hot</li>
                                                    <li class="list-group-item">Nhạc Giáng Sinh</li>
                                                    <li class="list-group-item">Nhạc Hot Rap Việt</li>
                                                    <li class="list-group-item">Nhạc Hot Việt</li>
                                                    <li class="list-group-item">Nhạc Sàn</li>
                                                    <li class="list-group-item">Nhạc Việt Mới</li>
                                                    <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                    </div>

                            </div>
                            <div class="card" style="padding-top: 10px;padding-left: 15px; margin-top: 10px;">
                                    <h3><img width="40" src="image/singer.png" alt=""> Chủ đề hot</h3>
                                    <div class="card-title">
                                            <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Cras justo odio</li>
                                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                                    <li class="list-group-item">Vestibulum at eros</li>
                                                    <li class="list-group-item">Cras justo odio</li>
                                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                                    <li class="list-group-item">Vestibulum at eros</li>
                                                    <li class="list-group-item">Cras justo odio</li>
                                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                                    <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                    </div>

                            </div>
                    </div>
                    <div class="col-lg-6  ">
                            <nav class="navbar navbar-expand-lg  ">
                                <div class="container bg-light">
                                        <a class="navbar-brand">
                                                <img width="25" height="25" src="image/bathatmoi.svg">
                                            </a>
                                            <ul class="navbar-nav mr-auto">
                                                    <li class="nav-item active">
                                                      <a class="nav-link">Bài hát mới </a>
                                                    </li>
                                            </ul>
                                </div>

                            </nav>
                    </div>
                    <div class="col-lg-3" >
                            <nav class="navbar navbar-expand-lg  ">
                                    <div class="container bg-light">
                                            <a class="navbar-brand">
                                                    <img width="25" height="25" src="image/hot.png">
                                                </a>
                                                <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                          <a class="nav-link">BXH Bài Hát </a>
                                                        </li>
                                                </ul>
                                    </div>
    
                                </nav>
    
                    </div>
                </div>
        </div>

<script>


    

</body>
</html>