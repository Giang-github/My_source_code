<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<br/>
	<br/>
<div class="login">
<form method="post" action="">
<img width="300px" height="200px" src="../image/Screenshot 2020-09-23 190933.png" />
<h1 style="font-style:100px; background-color:#999; color:#FFF; width:550px; height:65px" >Login</h1>
<label style="background-color:#0F0;  color:#FFF; text-transform:uppercase; height:40px"> User name</label><input style="margin-left:10px; width:350px; height:30px" type="text" name="client_username" required placeholder="Enter Username" /><br /> <br />
<label style=" height:40px;background-color:#0F0;  color:#FFF; text-transform:uppercase;"> Password</label><input style="margin-left:12px; width:350px; height:30px" type="password" name="client_password" required placeholder="Enter Password" /> <br /><br />
<input style="background-color:#F00; width:100px; margin-left:200px; height:38px" type="submit" name="login" value="Login" /><br /><br /><br /><br /><br /><br />
<p style="font-size:24px; background:#FFF; width:700px">If you don't have an account,
<a href="register_client.php"> Sign up here </a>
</p>
<?php 
$con = new mysqli('34.200.32.20', 'giangnt', '123@123a', 'turn_source');
			if (!$con){
				echo "ket noi that bai";				
			}
if(isset($_POST['login'])){
  
  $username = $_POST['client_username'];
  $password = $_POST['client_password'];
  $result = mysqli_query($con, "select * from client where client_username='$username' AND client_password='$password' " );
  
  $check_login = mysqli_num_rows($result);
  
  $row_login = mysqli_fetch_array($result);
  
  if($check_login == 0){
   echo "<script>alert('Password or username is incorrect, please try again!')</script>";
   exit();
  }  
  if($check_login > 0){ 
     $_SESSION['image'] = $row_login['image'];
  $_SESSION['name'] = $_POST['client_username'];
  echo "<script>alert('You have logged in successfully !')</script>";
  echo "<script>window.open('../admin/index_cart.php','_self')</script>";
  
  }
}

?>
</body>
</html>