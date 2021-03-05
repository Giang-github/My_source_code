<?php

		include "connect.php";
		$sql = "delete from song where songID = '$_GET[songID]'";
		mysqli_query($con,$sql);
		header('location:index_product.php?quanly=search_product');
?>