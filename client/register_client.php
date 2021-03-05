<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<style>
body {
	background-image: url(image/Hinh-nen-iOS-14-2.jpg)
}
</style>
<body>
<div class="resgister">
  <form method = "post" action="" enctype="multipart/form-data">
    <b style="color:black; font-size:25px; margin:0px"> Create Account: </b><img width="100px" height="70px" src="../image/images.jfif" /> <br />
    <table align="left" width="70%">
      <tr>
        <td width="25%"><b>UserName:</b></td>
        <td colspan="3" ><input style="width:300px; height:35px" type="text" name="client_username" required placeholder="UserName" /></td>
      </tr>
      <tr>
        <td width="25%"><b>Password:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="password"  name="client_password" required placeholder="Password" /></td>
		</tr>
      <tr>
        <td width="25%"><b>Full Name:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="text"  name="client_fullname" required placeholder="Full_Name" /></td>
      </tr>
		<tr>
        <td width="25%"><b>Phone Number:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="number"  name="client_phone" required placeholder="Phone Number" /></td>
      </tr>
		<tr>
        <td width="25%"><b>Address:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="text"  name="client_address" required placeholder=Address /></td>
      </tr>
      <tr>
        <td width="25%"><b>Birth Day:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="date"  name="client_birthday" required placeholder="31/10/2001" /></td>
      </tr>
      <tr>
				<td><b>Ảnh</b></td>
				<td><input type="file" name="c_image" ></td>
			</tr>
      
      <tr align="left">
        <td></td>
        <td colspan="4"><input style="width:100px; height:35px" type="submit" name="register" value="Register" /></td>
      </tr>
    </table>
  </form>
  <b style="font-size:21px; color:#0F0; background-color:#FFF; border:2px solid #000"> Already have account? <a href="login_admin.php"> Login Now.</a></b> </div>
<?php
include "../admin/connect.php";
if (isset($_POST['register'])) {
   
				$name = mysqli_escape_string($con,$_POST["client_username"]);
				$password = mysqli_escape_string($con,$_POST["client_password"]);
				$fullname = mysqli_escape_string($con,$_POST["client_fullname"]);
	            $phone = mysqli_escape_string($con,$_POST["client_phone"]);
				$address = mysqli_escape_string($con,$_POST["client_address"]);
				$birthday = mysqli_escape_string($con,$_POST["client_birthday"]);
				$image = $_FILES['c_image']['name'];
				if($image != null)
				{
				$path = "upload/";
				$tmp_name = $_FILES['c_image']['tmp_name'];
				$songImage = $_FILES['c_image']['name'];

				move_uploaded_file($tmp_name,$path.$image);
					$sql = "insert into client(client_username,client_password,client_fullname,client_phone,client_address,client_birthday,image) values('$name','$password','$fullname','$phone','$address','$birthday','$image')";
					mysqli_query($con,$sql);
					echo "<script>alert('You have create account in successfully !')</script>";
                    echo "<script>window.open('login_client.php','_self')</script>"; 
				}
    }

?>
</body>
</html>