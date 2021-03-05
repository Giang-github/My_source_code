<?php
			include "connect.php";
				$sql = "select * from song where songID = '$_GET[songID]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);


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
					$sql = "update song set songImage = '$songImage' , songFile = '$songFile' , songName = '$songName', songPrice = '$songPrice' , songDescription = '$songDescription' where songID = '$_GET[songID]' ";
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
	<button class="btn btn-info"><a style="color: white" href="#"><span class="glyphicon glyphicon-save-file"></span> Sửa bài hát</a></button>
	<form action="" method="post"  enctype="multipart/form-data">
		<table class="table" style="width: 750px; margin-top: 25px">
			<tr style="height: 65px">
				<td>Tên bài hát</td>
				<td><input style="200px; border: none" type="text" placeholder="Nhập tên mới " name="songName" value="<?php echo $row['songName']; ?>" ></td>
				<td></td>
			</tr>
            <tr style="height: 65px">
				<td>Giá</td>
				<td><input style="200px; border: none" type="text" name="songPrice" placeholder="Nhập giá mới" value="<?php echo $row['songPrice']; ?>"></td>
				<td></td>
			</tr>
            <tr style="height: 65px">
				<td>Mô tả</td>
				<td><input style="200px; border: none" type="text" name="songDescription" placeholder="Nhập mô tả mới" value="<?php echo $row['songDescription']; ?>"></td>
				<td></td>
			</tr >
				<td>Nhạc sĩ</td>
				<td><input type="file" name="c_songImage" ></td>
                <td align="center"><img style="width: 65px; height: 65px; " src="upload/<?php echo $row['songImage']; ?>" ></td>
			</tr>
			<tr>
				<td>File nhạc</td>
				<td><input type="file" name="c_songFile" ></td>
				 <td><audio controls loop src="upload/<?php echo $row['songFile']; ?>"></audio></td>
			</tr>
				<td></td>
				<td><button class="btn btn-success" type="submit" name="process" > <span class="glyphicon glyphicon-save-file "></span>Sửa bài hát</button></td>
		        <td></td>
			</tr>
		</table>
	</form> 
</div>
	<script src="../javascript/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


