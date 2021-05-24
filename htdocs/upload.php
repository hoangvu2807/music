<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<div id="dangky_thanhvien">
	<div class="content-block album">
		<h2 class="content-block-title"> Upload - Tải nhạc lên</h2>
	</div>
	<div class="thongtin_dangky">
		<div style="padding: 10px;">
			<form name="form1" method="post" enctype="multipart/form-data" action="" >
				<table width="825" height="201" border="0">
					<tr>
						<td width="301" align="center" valign="top">
						<p>
							<input class="btup" type="file" name="upload" id="upload">
						</p>
						<table width="277" border="0">
						  <tr>
						    <td width="89" height="30" align="right"><b>Tên bài hát:</b></td>
						    <td width="172"><label for="tenbaihat"></label>
					        <input type="text" name="tenbaihat" id="tenbaihat" height="100px"/></td>
					      </tr>
						  <tr>
						    <td height="30" align="right"><b>Ca sỹ:</b></td>
						    <td><label for="casy"></label>
					        <input type="text" name="casy" id="casy" /></td>
					      </tr>
						  <tr>
						    <td height="30" align="right"><b>Thể loại:</b></td>
						    <td><label for="theloai"></label>
						      <select name="theloai">
									<option value="Việt Nam">Nhạc Việt</option>
									<option value="Quốc Tế">Nhạc Quốc Tế</option>
									<option value="Hàn Quốc">Nhạc Hàn Quốc</option>
									<option value="Rap">Nhạc Rap</option>
								</select>
							</td>
					      </tr>
						  </table>
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
<?php	
	include("connect.php");

		if(isset($_POST['up']))
		{
			// lay het thong tin bai hat

			$tenbaihat=$_POST['tenbaihat'];
			$casy=$_POST['casy'];
			$theloai=$_POST['theloai'];
			$file_name=$_FILES['upload']['name'];
			$extent_file="mp3";
			// $pattern nay la de kiem tra phai co đuôi phải mp3 không (exp)
			$pattern='#.+\.(mp3)$#i';
			// preg_match la hàm kiểm tra cái tên bài hát có đuôi là .mp3 không á.
			// nếu đúng thì $file_type = true, còn k thì ngược lại
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
				// neu ma file la .mp3 thi chay khuc nay
				$source=$_FILES['upload']['tmp_name'];
				
				// $source nay la dia chi file voi' tmp_name
				$dest='nhac/'.$_FILES['upload']['name'];
				// $source voi $dest nay tren w3school no bày v
				// $dest la dia chi file voi ten cua no
				if(copy($source,$dest)==true)
				{
					$flag=true;
					// move_uploaded_file la di chuyen file upload vào folder nhac
					move_uploaded_file($_FILES['upload']['tmp_name'], './nhac/'.$_FILES['upload']['name']);
					// cau lenh insert bai hat do bai db
					$tv="insert into baihat(tenbaihat,casy,theloai,duongdan) values('$tenbaihat','$casy','$theloai','$dest')";
					$update= mysqli_query($conn,$tv);
					// Upload thanh cong thi echo ra Ok
					// vay hoy
					if($update)
					{
						
						echo "Ok";
					}
					else
					{
						echo "Đăng nhạc thất bại!";
					}
				}
				else
				{
					$flag=false;
					echo "Đăng nhạc thất bại!Trở về ";
				}
			}
			else
			echo "Kiểu File không hợp lệ. Quay lại ";
		}
		else
		{}
		$conn->close();

?>

</body>
</html>