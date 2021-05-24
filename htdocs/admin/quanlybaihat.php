<?php
// Start the session
session_start();
?>
<?php
        if(!isset($_SESSION["name"]) == "admin"){
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
    <title>Web nghe nhạc</title>
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
                            <li class="nav-item">
                              <a class="nav-link text-secondary" href="upload.php">Quản Lý Bài Hát</a>
                            </li>


                    </ul>
                </div>
        </nav>
        <div class="container mt-2">
            <div class= "row justify-content-md-center">
                <div class = "col-lg-10">
                <?php
                                                require_once "connect.php";
                                                $limit = 9;  
                                                if (isset($_GET["page"])) { 
                                                        $page  = $_GET["page"]; } 
                                                else { 
                                                        $page=1;};  
                                                $start_from = ($page-1) * $limit; 
                                                $sql = "SELECT * FROM baihat ORDER BY id ASC LIMIT $start_from, $limit";  

                                                $rs_result = mysqli_query($conn, $sql);
                                                        
                                                        while($rowc=mysqli_fetch_array($rs_result))
                                                        {
                                                ?>
                                                        <tr>
                                                        <td>
                                                        <div class="list_song" >
                                                                
                                                                    <div class="float-left w-75">
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
                                                                                
                                                                                        <a href="" title="<?php echo $rowc['theloai']; ?>"><?php echo $rowc['theloai']; ?></a>
                                                                                
                                                                        </p>
                                                                        <p class="song">Lượt nghe: 
                                                                                
                                                                                        <?php echo $rowc['luotnghe']; ?></a>
                                                                                
                                                                        </p>                                                                   
                                                                    </div>
                                                                    <div class="float-right w-25 ">
                                                                        
                                                                            <p class = "d-inline-block align-middle mt-4">
                                                                                <a href="updatenhac.php?id=<?php echo $rowc['id'] ?>">    
                                                                                    Sửa
                                                                                </a>
                                                                            </p>
                                                                            <p class = "d-inline-block align-middle mt-4">
                                                                                <a>
                                                                                    |
                                                                                </a>
                                                                            </p>
                                                                            <p class = "d-inline-block align-middle mt-4">
                                                                                <a href ="#" onClick="deletee('<?php echo $rowc['tenbaihat'] ?>', <?php echo $rowc['id'] ?>)">
                                                                                    Xóa
                                                                                </a>
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
                        echo '<p class="text-center">Tổng số lượng bài hát: '.$total_records.'</p>';
                        $total_pages = ceil($total_records / $limit);  
                        $start = ($page - $limit_page > 0) ? $page  - 1 : 1;
                        $end = ($page + $limit_page < $total_pages) ? $page + 1 : $total_pages;

                        ?>
                        <ul class='pagination float-right '>
                        <?php
                        $pagLink = '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/admin/quanlybaihat.php?page=' . ($page - 1 ) . '">Previous</a></li>';
                        
                        
                        
                        for ($i = $start ; $i <= $end; $i++ ) {  
                                $class  = ( $page == $i ) ? "active" : "";
                                $pagLink .= "<li class='page-item mr-2 ".$class."'><a class='page-link' href='/admin/quanlybaihat.php?&page=".$i."'>". $i . "</a></li>";
                                
                                
                        };  
                        $class = ($page == $total_pages) ? "disabled" : "";
                        $pagLink .= '<li class=" page-item mr-2 ' . $class . '"><a class= "page-link" href="/admin/quanlybaihat.php?page=' . ($page + 1 ) . '">Next</a></li>';
                        
                        echo $pagLink;  
                        $conn->close();
                        ?>       
                        </ul>       
                </div>
            </div>





        </div>

<div>

<script>
function deletee(p1,p2) {
        var conf = confirm("Bạn muốn xóa bài hát: " +p1 +"");
        if (conf == true){
                window.location= "deletee.php?delete="+p2+"";
        }
}
</script>
<footer class="container-fluid bg-4 text-center">
  <hr>
  <p>© 2019 Copyright</p> 
  <hr>
</footer>
</div>



</body>
</html>