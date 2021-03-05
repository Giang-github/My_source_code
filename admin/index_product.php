<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="background: hsla(197,37%,91%,1.00)">
<div class="container"> 
		<h4 style="font-weight: bold" class="text-info"><?php echo ' Hello, quản trị viên '. $_SESSION["admin_name"] .' !!!! '; ?><img src="../image/<?php echo $_SESSION['admin_image']; ?>" class="rounded-circle " style="width: 50px; height: 50px; margin-left: 15px"></h4>
				<img src="../image/Screenshot 2020-09-23 190933.png" width="150" class="rounded-circle"><a style="margin-left: 20px; margin-right:20px " href="#" ><span class="glyphicon glyphicon-envelope"></span> Thông báo</a>
	<a href="../index.php" ><span class="glyphicon glyphicon-flash"></span> Đăng xuất</a>
	<a style="margin-left: 20px" href="#" ><span class="glyphicon glyphicon-cog"></span> Cài đặt</a>
	</div>
		</div>
	<div style="background: hsla(216,65%,82%,1.00); color: white; height: 70px; margin-bottom: 25px; margin-top: 5px" class="container-fluid">
	  <ul style="margin-left: 80px; margin-top: 13px" class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link " href="../index.php">Trang chủ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Hướng dẫn</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Liên hệ </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Chủ để</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Nghệ sĩ </a>
    </li>
		  <li class="nav-item">
      <a class="nav-link " href="#">Album</a>
    </li>    
  </ul>
	</div>
	<div style="background-color:hsla(184,40%,86%,1.00)">
  <div class="row">
	  <div class="col-md-3 col-sm-4 col-12" style="background: hsla(193,78%,85%,1.00)">
	<table class="table" style="margin-top: 20px">
	<tr>
		<td style="background-color: hsla(224,19%,72%,1.00)"><b style="margin-left: 25px; font-size: 20px" ><span class="glyphicon glyphicon-list"></span> Danh mục tính năng</b></td>
		</tr>
		<tr>
		<td style="font-size: 17px; background-color: hsla(0,15%,94%,1.00)"><a  href="search_product.php" ><span class="glyphicon glyphicon-fast-forward"></span> Quản lí sản phẩm</a></td>
		</tr>
		<tr style="font-size: 17px; background-color: hsla(0,15%,94%,1.00)">
		<td><a  href="" ><span class="glyphicon glyphicon-fast-forward"></span> Quản lí nhạc sĩ</a></td>
		</tr>
		<tr>
		<td style="font-size: 17px; background-color: hsla(0,15%,94%,1.00)"> <a  href="" ><span class="glyphicon glyphicon-fast-forward"></span> Quản lí hóa đơn</a> </td>
		</tr >
		<tr style="font-size: 17px; background-color: hsla(0,15%,94%,1.00)">
		<td> <a  href="" ><span class="glyphicon glyphicon-fast-forward"></span> Quản lí thể loại</a></td>
		</tr>
		<tr style="font-size: 17px; background-color: hsla(0,15%,94%,1.00)">
		<td> <a  href="" ><span class="glyphicon glyphicon-fast-forward"></span> Quản lí người dùng</a></td>
		</tr>
	</table>
		</div>

<div class="col-9" style="background:hsla(155,96%,89%,1.00)">               
	<div style="margin-top: 20px">
	<button class="btn btn-info"><a style="color: white" href="index_product.php"><span class="glyphicon glyphicon-refresh "></span> Làm mới</a></button>
	<button class="btn btn-info"><a style="color: white" href="index_product.php?quanly=search_product"><span class="glyphicon glyphicon-list-alt "></span> Danh mục sản phẩm</a></button>
		</div>
	<br/>
	<br/>
			 <div class="container"><?php require("content_product.php"); ?></div>
		</div>
	</div>
</div>
</body>
</html>