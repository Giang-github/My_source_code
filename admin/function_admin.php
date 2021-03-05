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
</head>
<body>
	<div class="container"> 
		<h4 style="font-weight: bold" class="text-info"><?php echo ' Hello, quản trị viên '. $_SESSION["admin_name"] .' !!!! '?> <img src="../image/<?php echo $_SESSION['admin_image']; ?>" class="rounded-circle " style="width: 53px; height: 53px; margin-left: 15px">
</h4>
	    <form class="form-inline my-2 my-lg-0" action="" method="POST" enctype="multipart/form-data">
			<img src="../image/Screenshot 2020-09-23 190933.png" width="150" class="rounded-circle">
	      <input class="form-control mr-sm-2" type="text" name="nhap" placeholder="Nhập tên ca sĩ, bài hát" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_song" >Search</button>
			<a style="margin-left: 20px; margin-right:20px " href="#" ><span class="glyphicon glyphicon-envelope"></span> Thông báo</a>
						<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown2">
	         
	        </a>
	        <div class="dropdown-content">
				<a class="dropdown-item" href="../index.php">Đăng xuất</a>
	          <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Cài đặt tài khoản </a>
	        </div>
	      </li>
			<a href="../index.php" ><span class="glyphicon glyphicon-flash"></span> Đăng xuất</a>
			<a style="margin-left: 20px" href="#" ><span class="glyphicon glyphicon-cog"></span> Cài đặt</a>

	    </form>
	  </div>
<nav class="navbar navbar-expand-lg  navbar-light bg-light" >
  <div  class="container" >
	  <a class="nav-link" href="../index.php"> Trang chủ </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto" >
	      <li class="nav-item " >
	        <a class="nav-link" href="#">Hướng dẫn </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" style="margin-left: 25px">Liên Hệ</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" style="margin-left: 25px" >
	          Top 100
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Việt Nam</a>
	          <a class="dropdown-item" href="#">Âu Mĩ</a>
				<a class="dropdown-item" href="#">Hòa Tấu</a>
				<a class="dropdown-item" href="#">Hàn Quốc</a>
	        </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown1" style="margin-left: 25px" >
	          Chủ đề
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Buồn</a>
	          <a class="dropdown-item" href="#">Balad</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Thể loại khác</a>
	        </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown2" style="margin-left: 25px">
	          Nghệ sĩ
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Sơn Tùng</a>
	          <a class="dropdown-item" href="#">Soobin Hoàng Sơn</a>
				 <a class="dropdown-item" href="#">Hương Tràm</a>
	          <a class="dropdown-item" href="#">Huy R</a>
	          <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Ca sĩ khác</a>
	        </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown3" style="margin-left: 25px" >
	          Album
	        </a>
	      </li>
			<li class="nav-item dropdown"> 
	        <a data-toggle="modal" data-target="#myModal" class="nav-link"  id="navbarDropdown4" style="margin-left: 25px">
	          Admin
	        </a>
				 <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align:center; color: red">Bạn phải đăng nhập để thực hiện quyền của Admin !!!!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success"> <a style="text-decoration:none; color:white" href="admin/login_admin.php">Đăng nhập</a></button><button type="button" class="btn btn-danger" data-dismiss="modal">Hủy bỏ</button>
        </div>
        
      </div>
    </div>
  </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown5" style="margin-left: 25px">
	          Nhạc cá nhân
	        </a>
	      </li>
	    </ul>
	  </div>
  </div>
	 </nav>
	

<div class="container table-responsive">
	<table class="table" style="width: 500px" >
	<tr>
		<td style="background-color: hsla(224,19%,72%,1.00)"><b style="margin-left: 25px; font-size: 20px" ><span class="glyphicon glyphicon-list"></span> Danh mục tính năng</b></td>
		</tr>
		<tr>
		<td style="font-size: 17px; background-color: hsla(0,15%,94%,1.00)"><a  href="index_product.php" ><span class="glyphicon glyphicon-fast-forward"></span> Quản lí sản phẩm</a></td>
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
	</div><script src="../javascript/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
