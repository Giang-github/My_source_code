<?php
		$hostname = "34.200.32.20";
		$user = "giangnt";
		$pass = "123@123a";
		$db = "turn_source";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>