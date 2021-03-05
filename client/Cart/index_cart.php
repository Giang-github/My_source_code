<?php
session_start();
require_once("control.php");
$db_handle = new control_cart();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM song WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('songName'=>$productByCode[0]["songName"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'songPrice'=>$productByCode[0]["songPrice"], 'songImage'=>$productByCode[0]["songImage"], 'songFile'=>$productByCode[0]["songFile"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../../style/style.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</HEAD>
<BODY>
	<div class="container">
		<?php
					include("../../admin/connect.php");
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
			<img src="../../image/Screenshot 2020-09-23 190933.png" width="150" class="rounded-circle">
	      <input class="form-control mr-sm-2" type="text" name="nhap" placeholder="Nhập tên ca sĩ, bài hát" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_song" >Search</button>
			<a style="margin-left: 20px; margin-right:20px " href="#" ><span class="glyphicon glyphicon-envelope"></span> Thông báo</a>
						<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown2">
	          <img src="../../image/<?php echo $_SESSION['image']; ?>" class="rounded-circle " style="width: 53px; height: 53px">
	        </a>
	        <div class="dropdown-content">
				<a class="dropdown-item" href="index.php">Đăng xuất</a>
	          <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Cài đặt tài khoản </a>
	        </div>
	      </li>
			<a style="margin-left: 20px" href="../../index.php" ><span class="glyphicon glyphicon-flash"></span> Đăng xuất</a>
			<a style="margin-left: 20px" href="#" ><span class="glyphicon glyphicon-cog"></span> Cài đặt</a>

	    </form>
		</div>
<nav style="background-color: hsla(0,3%,41%,1.00); color: white" class="navbar navbar-expand-lg  navbar-light bg-light" >
  <div  class="container" >
	  <a class="nav-link" href="index.php"> Trang chủ </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span></button>
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
          <button class="btn btn-success"> <a style="text-decoration:none; color:white" href="../../admin/login_admin.php">Đăng nhập</a></button><button type="button" class="btn btn-danger" data-dismiss="modal">Hủy bỏ</button>
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
	<div class="container">
	
<div id="shopping-cart">
	<h3 class="text-danger">Giỏ Hàng Của Bạn <span class="glyphicon glyphicon-shopping-cart"></span>: </h3>
<a class="text-danger" id="btnEmpty" href="index_cart.php?action=empty" style="font-weight: bold">Làm mới <span class="glyphicon glyphicon-refresh"></span> </a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_songPrice = 0;
?>	
	<div class="table-responsive">
<table class="table">
<tr style="font-weight: bold">
<th style="text-align:left;">Nhạc sĩ</th>
<th></th>
<th>Tên bài hát</th>
<th style="text-align:left;">Mã bài hát</th>
<th>Số lượng</th>
<th>Giá bài hát</th>
<th>Tổng số tiền</th>
<th>Xóa bỏ</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["songPrice"];
		?>
				<tr>
				<td><img src="../../image/<?php echo $item["songImage"]; ?>" class="rounded-circle dia-cd" style="width: 53px; height: 53px" /></td>
					<td><audio controls loop src="../../music/<?php echo $item["songFile"]; ?>"></audio></td>
					<td><?php echo $item["songName"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td ><?php echo "$ ".$item["songPrice"]; ?></td>
				<td ><?php echo "$ ". number_format($item_price,2); ?></td>
				<td ><a href="index_cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_songPrice += ($item["songPrice"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="4"  class="text-primary">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_songPrice, 2); ?></strong></td>
<td></td>
</tr>
</table>
		</div>
  <?php
} else {
?>
<div class="no-records text-success"><h3>Giỏ hàng rỗng<img class="rounded-circle" style="width: 60px; height: 60px" src="../../image/pngtree-hand-painted-trolley-empty-cart-daily-supplies-png-image_3892416.jpg">  thêm một vài bài hát nhé !!!!</h3>   </div>
<?php 
}
?>
</div>
<p style="font-size: 26px; color: red"><span class="glyphicon glyphicon-list-alt text-danger"></span>Nhạc của shop: </p>    
<div class="table-responsive">
 <table class="table">
 <tr>
						<th >Nhạc sĩ</th>
						<th >Tên bài hát</th>
						<th >Giá</th>
	                    <th ></th>
	 	                    <th ></th>
					</tr>
					<br/>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM song ORDER BY songID ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?> 
	 <tr>
		 <form method="post" action="index_cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">>
		 		<td><img style="width: 50px; height: 50px" class="rounded-circle dia-cd" src="../../admin/upload/<?php echo $product_array[$key]["songImage"]; ?>"></td>	
		 		<td><?php echo $product_array[$key]["songName"]; ?></td>
		 		<td><?php echo "$".$product_array[$key]["songPrice"]; ?></td>	
	  <td><audio controls loop src="../../music/<?php echo $product_array[$key]["songFile"]; ?>"></audio></td>     
			<td><input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
		  <input type="submit" value="Add to Cart" class="btn btn-primary" /></td>
			 </form>
			</tr>
	<?php
		}
	}
	?>
 </table>
</div>
		</div>
	<script src="../../javascript/jquery-3.3.1.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</BODY>
</HTML>