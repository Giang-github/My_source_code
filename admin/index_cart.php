<?php
session_start();
?>
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
	<div class="container"> 
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
	    <form class="form-inline my-2 my-lg-0" action="" method="POST" enctype="multipart/form-data">
			<img src="../image/Screenshot 2020-09-23 190933.png" width="150" class="rounded-circle">
	      <input class="form-control mr-sm-2" type="text" name="nhap" placeholder="Nhập tên ca sĩ, bài hát" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_song" >Search</button>
			<a style="margin-left: 20px; margin-right:20px " href="#" ><span class="glyphicon glyphicon-envelope"></span> Thông báo</a>
						<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown2">
	          <img src="../image/<?php echo $_SESSION['image']; ?>" class="rounded-circle " style="width: 53px; height: 53px">
	        </a>
	        <div class="dropdown-content">
				<a class="dropdown-item" href="../index.php">Đăng xuất</a>
	          <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Cài đặt tài khoản </a>
	        </div>
	      </li>
			<a style="margin-left: 20px" href="index.php" ><span class="glyphicon glyphicon-flash"></span> Đăng xuất</a>
			<a style="margin-left: 20px" href="#" ><span class="glyphicon glyphicon-cog"></span> Cài đặt</a>

	    </form>
	  </div>
<nav class="navbar navbar-expand-lg  navbar-light bg-light" >
  <div  class="container" >
	  <a class="nav-link" href="index.php"> Trang chủ </a>
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
		  </nav> 
  </div>
	</div>
	
<!-- end menu -->
<!-- slide -->
	

<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 200px">
      <img class="d-block w-100" src="../image/Screenshot 2020-09-23 191939.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../image/Screenshot 2020-09-23 192027.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../image/Screenshot 2020-09-23 192002.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h2 class="list-product-title">Nhạc của shop : </h2>
<div class="infor">
<div class="table-responsive">
 <table class="table">
 <tr>
						<th >STT</th>
						<th >Nhạc sĩ</th>
						<th >Tên bài hát</th>
						<th >Giá</th>
						<th ></th>
	                    <th ></th>
					</tr>
					<br/>
			<?php while ($row = mysqli_fetch_array($result)) {
				
			 ?>
					<tr>
						<td><?php echo $row['songID']; ?> </td>
						<td><img class="rounded-circle dia-cd" src="upload/<?php echo $row['songImage']; ?>" style="width: 50px; height: 50px"</td>
						<td><?php echo $row['songName']; ?></td>
                        <td><?php echo $row['songPrice']; ?> </td>
						<td><audio controls loop src="upload/<?php echo $row['songFile']; ?>"></audio></td>
						<td><button class="btn btn-primary"><a style="text-decoration:none; color: white" href="../client/Cart/index_cart.php">Mua Bài Hát</a></button>  </td>
					</tr>
			 <?php } ?>
 </table>
</div>
		<h2 class="list-product-title">Ca sĩ nổi bật</h2>
		<div class="list-product-subtitle">
			<p>Danh sách ca sĩ</p>
		</div>
		<div class="product-group">
			<div class="row">
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top " src="../image/c29a7d29348b1a3f502803ab9d8355cc.png" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Sơn Tùng </h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/datg10_20190625163358.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Đạt G</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/0645144_euhm.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Hương Tràm</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src=".../image/20200212111255-96bc.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Jack</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>	
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/huy-r-la-ai-tieu-su-su-nghiep-cua-chu-nhan-hit-co-gai-m52-20200116-045624.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Huy R</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/uw.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Soobin Hoàng Sơn</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container">
	<div class="flex-row-reverse">
		<h2 class="list-product-title">MV Nổi bật</h2>
		<div class="list-product-subtitle">
			<p>Được xem nhiều nhất </p>
		</div>
		<div class="product-group">
			<div class="row">
				<div class="col-md-3 ">
					<div class="card card-product mb-3">
					  <div class="embed-responsive embed-responsive-4by3"> <video style="width:320; height: 240" controls> <source src="../music/Ngây Thơ - Tăng Duy Tân x Phong Max - BAE - OFFICIAL MV.mp4" type="video/mp4">
    </video></div>
					  <div class="card-body">
					    <h5 class="card-title">Tên bài hát: Ngây Thơ</h5>
					    <p class="card-text">Tác giả: Tăng Duy Tân</p>
					    <a href="#" class="btn btn-primary">Tải xuống</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="card card-product mb-3">
					  <div class="embed-responsive embed-responsive-4by3"> <video controls> <source src="../music/Ngây Thơ - Tăng Duy Tân x Phong Max - BAE - OFFICIAL MV.mp4" type="video/mp4">
    </video>
</div>
					  <div class="card-body">
					    <h5 class="card-title">Tên bài hát: Ngây Thơ</h5>
					    <p class="card-text">Tác giả: Tăng Duy Tân</p>
					    <a href="#" class="btn btn-primary">Tải xuống</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-product mb-3">
					  <div class="embed-responsive embed-responsive-4by3"> <video controls> <source src="../music/Ngây Thơ - Tăng Duy Tân x Phong Max - BAE - OFFICIAL MV.mp4" type="video/mp4">
    </video>
</div>
					  <div class="card-body">
					    <h5 class="card-title">Tên bài hát: Ngây Thơ</h5>
					    <p class="card-text">Tác giả: Tăng Duy Tân</p>
					    <a href="#" class="btn btn-primary">Tải xuống</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="card card-product mb-3">
					  <div class="embed-responsive embed-responsive-4by3"> <video controls> <source src="../music/Ngây Thơ - Tăng Duy Tân x Phong Max - BAE - OFFICIAL MV.mp4" type="video/mp4">
    </video>
</div>
					  <div class="card-body">
					    <h5 class="card-title">Tên bài hát: Ngây Thơ</h5>
					    <p class="card-text">Tác giả: Tăng Duy Tân</p>
					    <a href="#" class="btn btn-primary">Tải xuống</a>
					  </div>
					</div>
				</div>
				<h2 class="list-product-title">Bảng Xếp Hạng Nhạc : </h2>
				<div class="row">
					<div class="col-md-12 col-sm-6 col-6">
					<b style="font-size: 20px">1 . </b><img src="../image/datg10_20190625163358.jpg" style="width: 50px; height: 50px" class="rounded-circle dia-cd" alt="Cinque Terre" > <b style="margin: 10px">Buông đôi tay nhau ra </b> <audio src="../music/Buong-Doi-Tay-Nhau-Ra-Son-Tung-M-TP.mp3" controls loop></audio>
					</div>
			  <div class="col-md-12 col-sm-4 col-6">
					<b style="font-size: 20px">2 . </b><img src="../image/c29a7d29348b1a3f502803ab9d8355cc.png" style="width: 50px; height: 50px" class="rounded-circle dia-cd" alt="Cinque Terre" > <b style="margin: 10px">Buông đôi tay nhau ra </b> <audio src="../music/Buong-Doi-Tay-Nhau-Ra-Son-Tung-M-TP.mp3" controls loop></audio>
					</div>
					<div class="col-md-12 col-sm-4 col-6">
					<b style="font-size: 20px">3 . </b><img src="../image/20200212111255-96bc.jpg" style="width: 50px; height: 50px" class="rounded-circle dia-cd" alt="Cinque Terre" > <b style="margin: 10px; margin-right:95px ">Ngây thơ </b> <audio src="../music/NgayTho-TangDuyTanPhongMax-6590759.mp3" controls loop></audio>
					</div>
					<div class="col-md-12 col-sm-4 col-6">
					<b style="font-size: 20px">4 . </b><img src="../image/0645144_euhm.jpg" style="width: 50px; height: 50px" class="rounded-circle dia-cd" alt="Cinque Terre" > <b style="margin: 10px">Buông đôi tay nhau ra </b> <audio src="../music/Buong-Doi-Tay-Nhau-Ra-Son-Tung-M-TP.mp3" controls loop></audio>
					</div>
					<div class="col-md-12 col-sm-4 col-6">
					<b style="font-size: 20px">5 . </b><img src="../image/c29a7d29348b1a3f502803ab9d8355cc.png" style="width: 50px; height: 50px" class="rounded-circle dia-cd" alt="Cinque Terre" > <b style="margin: 10px">Buông đôi tay nhau ra </b> <audio src="../music/Buong-Doi-Tay-Nhau-Ra-Son-Tung-M-TP.mp3" controls loop></audio>
					</div>
					<div class="col-md-12 col-sm-4 col-6">
					<b style="font-size: 20px">6 . </b><img src="../image/uw.jpg" style="width: 50px; height: 50px" class="rounded-circle dia-cd" alt="Cinque Terre" > <b style="margin: 10px">Buông đôi tay nhau ra </b> <audio src="../music/Buong-Doi-Tay-Nhau-Ra-Son-Tung-M-TP.mp3" controls loop></audio>
					</div>
					<div class="col-md-12 col-sm-4 col-6">
					<b style="font-size: 20px">7 . </b><img src="../image/huy-r-la-ai-tieu-su-su-nghiep-cua-chu-nhan-hit-co-gai-m52-20200116-045624.jpg" style="width: 50px; height: 50px" class="rounded-circle dia-cd" alt="Cinque Terre" > <b style="margin: 10px">Buông đôi tay nhau ra </b> <audio src="../music/Buong-Doi-Tay-Nhau-Ra-Son-Tung-M-TP.mp3" controls loop></audio>
					</div>
				</div>
	
			</div>
			</div>
		</div>
			<h2 class="list-product-title">Thể Loại</h2>
		<div class="product-group">
			<div class="row">
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top " src="../image/G (19).jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Nhạc Trẻ </h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/share-top-10-ten-cac-nhom-nhac-han-quoc-co-suc-anh-huong-lon-nhat-hien-nay-1553678113.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Nhạc Hàn</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/1.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Nhạc Âu Mĩ</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/share-top-10-ten-cac-nhom-nhac-han-quoc-co-suc-anh-huong-lon-nhat-hien-nay-1553678113.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Nhạc K-Pop</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>	
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/share-top-10-ten-cac-nhom-nhac-han-quoc-co-suc-anh-huong-lon-nhat-hien-nay-1553678113.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Nhạc Vàng</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="../image/G (19).jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Nhạc Bolero</h5>
					    <a href="#" class="btn btn-primary">Danh sách bài hát</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="../javascript/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>