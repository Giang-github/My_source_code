<?php
		$hostname = "184.73.19.94";
		$user = "giangnt";
		$pass = "giang2001";
		$db = "assignment2";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>
