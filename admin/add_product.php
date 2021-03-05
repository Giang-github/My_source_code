
<?php
			include "connect.php";
			
			if(isset($_POST["process"]))
			{
				$songName = mysqli_escape_string($con,$_POST["songName"]);
				$songPrice = mysqli_escape_string($con,$_POST["songPrice"]);
				$songDescription = mysqli_escape_string($con,$_POST["songDescription"]);
				$songImage = $_FILES['c_songImage']['name'];
				$songFile = $_FILES['c_songFile']['name'];
				if($songImage != null && $songFile != null)
				{
				$path = "upload/";
				$tmp_name = $_FILES['c_songImage']['tmp_name'];
				$songImage = $_FILES['c_songImage']['name'];

				move_uploaded_file($tmp_name,$path.$songImage);
			    $tmp_name = $_FILES['c_songFile']['tmp_name'];
				$songFile = $_FILES['c_songFile']['name'];

				move_uploaded_file($tmp_name,$path.$songFile);
					$sql = "insert into song(songName,SongPrice,songDescription,songFile,songImage) values('$songName','$songPrice','$songDescription','$songFile','$songImage')";
					mysqli_query($con,$sql);
					header('location:index_product.php?quanly=search_product');
				}
			}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<button class="btn btn-info"><a style="color: white" href="#"><span class="glyphicon glyphicon-plus "></span> Thêm bài hát</a></button>
	<form action="" method="post"  enctype="multipart/form-data">
		<table class="table" style="width: 550px; margin-top: 25px">
			
			<tr>
				<td>Tên bài hát</td>
				<td><input style="width: 300px; border: none" placeholder="Nhập tên bài hát " type="text" name="songName" ></td>
			</tr>
            <tr>
				<td>Giá bài hát</td>
				<td><input style="width: 300px;  border: none" placeholder="Nhập giá bài hát " type="text" name="songPrice" ></td>
			</tr>
            <tr>
				<td>Mô tả</td>
				<td><input style="width: 300px;  border: none" placeholder="Nhập mô tả cho bài hát " type="text" name="songDescription" ></td>
			</tr>
			<tr>
				<td>Ảnh</td>
				<td><input  type="file" name="c_songImage" ></td>
			</tr>
			<tr>
				<td>Nhạc</td>
				<td><input type="file" name="c_songFile" ></td>
			</tr>
				<td></td>
			<td><button class="btn btn-success" type="submit" name="process" > <span class="glyphicon glyphicon-plus  "></span>Thêm bài hát</button></td>
			</tr>
		</table>
	</form> 
</div>
	<script src="../javascript/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

