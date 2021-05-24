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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="js/func.js"></script>
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
				<div >
			<div class="content-block album">
				<h2 class="content-block-title"> Upload - Tải nhạc lên</h2>
			</div>
			<div >
				<div style="padding: 10px;">
					<form name="form1" method="post" enctype="multipart/form-data" action="" >
						<table width="825" height="201" border="0">
							<tr>
								<td width="301" align="center" valign="top">
								<p>
									<input class="btup" type="file" name="upload" id="upload">
								</p>
								<input class="form-control form-control-lg  mb-3" name="tenbaihat" type="text" placeholder="Tên bài hát">
								<input class="form-control form-control-lg mb-3" name="casy" type="text" placeholder="Ca sỹ">
								<select class="form-control form-control-lg mb-3" name="theloai">
										<option value="Việt Nam">Nhạc Việt</option>
										<option value="Âu Mỹ">Âu Mỹ</option>
										<option value="Hàn Quốc">Hàn Quốc</option>
										<option value="Rap">Rap</option>
								</select>
								<p> 
									<input class="btup" type="submit" name="up" value="Upload">
								</p>
								</td>
								<td width="36" valign="top">&nbsp;</td>
								<td width="474" valign="top">
									
									<div>
										<strong>Cách thức upload tránh lỗi nhạc:</strong>
									</div>
									<ul>
										<li>- Không để tên bài hát có dấu (chỉ nhạc trên máy).</li>
										<li>- Không để tên ca sĩ trên bài hát (chỉ nhạc trên máy).</li>
										<li>- Chỉ up nhạc MP3.</li>
										
									</ul>
									<br />
									<div>
										<strong>Quy định upload:</strong>
									</div>
									<ul>
										<li>- Không upload nhạc cấm.</li>
										<li>- Không upload nhạc bậy.</li>
										
										<li>- Được ghi tên bài hát có dấu và phải<br />
											Viết hoa mỗi chữ cái đầu (ở phần 'Tên bài hát'. VD: <strong id="1">K</strong>huôn <strong>M</strong>ặt <strong>Đ</strong>áng <strong>T</strong>hương).</li>
									</ul>
									<br />
									
								</td>
							</tr>
						</table>
					</form>
				</div>			       
			</div>
			</div>
		</div>
<?php	
	include("connect.php");

		if(isset($_POST['up']))
		{
			$tenbaihat=$_POST['tenbaihat'];
			$casy=$_POST['casy'];
			$theloai=$_POST['theloai'];
			$file_name=$_FILES['upload']['name'];
			$extent_file="mp3";
			$pattern='#.+\.(mp3)$#i';
			
			if(preg_match($pattern,$file_name)==1)
			{
				$file_type=true;
			}
			else
			{
				$file_type=false;
			}
			if($file_type==true)
			{
				$source=$_FILES['upload']['tmp_name'];
				
				$dest='../nhac/'.$_FILES['upload']['name'];
				
				if(copy($source,$dest)==true)
				
				{
					
					$flag=true;
					move_uploaded_file($_FILES['upload']['tmp_name'], '../nhac/'.$_FILES['upload']['name']);
					$tv="insert into baihat(tenbaihat,casy,theloai,duongdan) values('$tenbaihat','$casy','$theloai','$dest')";
	                $update= mysqli_query($conn,$tv);
					if($update)
					{
						
						echo "Đăng nhạc thành công.";
					}
					else
					{
						echo "Đăng nhạc thất bại!";
					}
				}
				else
				{
					$flag=false;
					echo "Đăng nhạc thất bại ";
				}
			}
			else
			echo "Kiểu File không hợp lệ. Quay lại ";
		}
		else
		{}
		$conn->close();

?>
<footer class="container-fluid bg-4 text-center">
  <hr>
  <p>© 2019 Copyright</p> 
  <hr>
</footer>
</body>
</html>