
<?php
		
		if(isset($_GET["quanly"]))
		{
			$row = $_GET["quanly"];
		}
		else
			$row = "";
		if ($row == "ds_sanpham") {
			include("ds_sanpham.php");
		}else if ($row == "add_product") {
			include("add_product.php");
		}else if ($row == "edit_product") {
			include("edit_product.php");
		}else if($row == "delete_product"){
			include("delete_product.php");
		}else if ($row == "search_product") {
			include("search_product.php");
		}
?>
