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
	<title>Document</title>
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
                        <a style="color: blue"> Xin Ch??o: <?php echo $_SESSION["name"] ?></a>
                        <div class="dropdown-content">
                                <a href="#"> S???a th??ng tin</a>
                                <a href="#"> ????ng Xu???t</a>
                        </div>
                </div>
        </nav>

        <nav class="second-nav navbar-expand-lg " >
            <div class="container">
                    <ul class="navbar-nav  ">
                            <li class="nav-item active">
                              <a class="nav-link text-secondary" href="#" >Trang ch??? </a>
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
				<h2 class="content-block-title"> Upload - T???i nh???c l??n</h2>
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
								<input class="form-control form-control-lg  mb-3" name="tenbaihat" type="text" placeholder="T??n b??i h??t">
								<input class="form-control form-control-lg mb-3" name="casy" type="text" placeholder="Ca s???">
								<select class="form-control form-control-lg mb-3" name="theloai">
										<option value="Vi???t Nam">Nh???c Vi???t</option>
										<option value="??u M???">??u M???</option>
										<option value="H??n Qu???c">H??n Qu???c</option>
										<option value="Rap">Rap</option>
								</select>
								<p> 
									<input class="btup" type="submit" name="up" value="Upload">
								</p>
								</td>
								<td width="36" valign="top">&nbsp;</td>
								<td width="474" valign="top">
									
									<div>
										<strong>C??ch th???c upload tr??nh l???i nh???c:</strong>
									</div>
									<ul>
										<li>- Kh??ng ????? t??n b??i h??t c?? d???u (ch??? nh???c tr??n m??y).</li>
										<li>- Kh??ng ????? t??n ca s?? tr??n b??i h??t (ch??? nh???c tr??n m??y).</li>
										<li>- Ch??? up nh???c MP3.</li>
										
									</ul>
									<br />
									<div>
										<strong>Quy ?????nh upload:</strong>
									</div>
									<ul>
										<li>- Kh??ng upload nh???c c???m.</li>
										<li>- Kh??ng upload nh???c b???y.</li>
										
										<li>- ???????c ghi t??n b??i h??t c?? d???u v?? ph???i<br />
											Vi???t hoa m???i ch??? c??i ?????u (??? ph???n 'T??n b??i h??t'. VD: <strong id="1">K</strong>hu??n <strong>M</strong>???t <strong>??</strong>??ng <strong>T</strong>h????ng).</li>
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

		if(isset($_POST['up'])) <!--dd-->
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
						
						echo "????ng nh???c th??nh c??ng.";
					}
					else
					{
						echo "????ng nh???c th???t b???i!";
					}
				}
				else
				{
					$flag=false;
					echo "????ng nh???c th???t b???i ";
				}
			}
			else
			echo "Ki???u File kh??ng h???p l???. Quay l???i ";
		}
		else
		{}
		$conn->close();

?>

</body>
</html>