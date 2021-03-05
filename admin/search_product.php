<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
		<?php
					include("connect.php");
					if(isset($_POST["search_song"]))
					{
						$songName_search = $_POST['nhap'];
						$sql = "select * from song where songName like '%$songName_search%'";
						mysqli_query($con,$sql);
					}else
					{
						$sql = "select * from song";
					}
					$result = mysqli_query($con,$sql);

		?>
	<div class="container">
 <form style="margin: 25px" class="form-inline my-2 my-lg-0" action="" method="POST" enctype="multipart/form-data">
	      <input class="form-control mr-sm-2" type="text" name="nhap" placeholder="Nhập tên ca sĩ, bài hát..." aria-label="Search">
	      <button class="btn btn-success my-2 my-sm-0" type="submit" name="search_song" ><span class="glyphicon glyphicon-search "></span> Search</button>
	    </form>
	</div>
     <br/><br/>
	<div class="table table-responsive" style="width: 950px">
		<table class="table"  >
					<tr>
						<th >STT</th>
						<th >Tên bài hát</th>
						<th >Giá</th>
						<th >Mô tả</th>
						<th >Nhạc sĩ</th>
						<th ></th>
						<th width="100px;"><a href="index_product.php?quanly=add_product">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				
			 ?>
					<tr>
						<td><?php echo $row['songID']; ?> </td>
						<td><?php echo $row['songName']; ?></td>
                        <td><?php echo $row['songPrice']; ?> </td>
						<td><?php echo $row['songDescription']; ?></td>
						<td><img class="rounded-circle dia-cd" style="width: 75px; height: 75px" src="upload/<?php echo $row['songImage']; ?>" </td>
						<td><audio controls loop src="upload/<?php echo $row['songFile']; ?>"></audio> </td>

						<td><a href="index_product.php?quanly=edit_product&songID=<?php echo $row['songID']; ?>">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index_product.php?quanly=delete_product&songID=<?php echo $row['songID']; ?>">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
	</div>
	</div>
		<script src="javascript/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>