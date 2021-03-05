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
        <td colspan="3" ><input style="width:300px; height:35px" type="text" name="admin_username" required placeholder="UserName" /></td>
      </tr>
      <tr>
        <td width="25%"><b>Password:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="password" id="password_confirm1" name="admin_password" required placeholder="Password" /></td>
      </tr>
      <tr>
        <td width="25%"><b>Confirm Password:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="password" id="password_confirm2" name="confirm_password" required placeholder="Confirm Password" />
      </tr>
      <tr>
        <td width="25%"><b>Full Name:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="text" id="full_name" name="fullname" required placeholder="Full_Name" /></td>
      </tr>
		<tr>
        <td width="25%"><b>Phone Number:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="number" id="phone_" name="phone" required placeholder="Phone Number" /></td>
      </tr>
		<tr>
        <td width="25%"><b>Address:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="text" id="address_" name="address" required placeholder=Address /></td>
      </tr>
      <tr>
        <td width="25%"><b>Birth Day:</b></td>
        <td colspan="3"><input style="width:300px; height:35px" type="date" id="birth_day" name="birthday" required placeholder="31/10/2001" /></td>
      </tr>
      <tr>
        <td width="25%"><b>Gender :</b></td>
        <td><select style="width:200px; height:35px" name="gender">
            <option value=""></option>
            <option value="Nam">Nam</option>
            <option value="Nu">Nữ</option>
          </select></td>
      </tr>
      <tr>
        <td width="25%"><b>Email:</b></td>
        <td width="%"colspan="3"><input style="width:300px; height:35px" type="email" id="email_" name="email" required placeholder="Email" /></td>
		</tr>
      <tr align="left">
        <td></td>
        <td colspan="4"><input style="width:100px; height:35px" type="submit" name="register" value="Register" /></td>
      </tr>
    </table>
  </form>
  <b style="font-size:21px; color:#0F0; background-color:#FFF; border:2px solid #000"> Already have account? <a href="login_admin.php"> Login Now.</a></b> </div>
<?php
$con = new mysqli('34.200.32.20', 'giangnt', '123@123a', 'turn_source');
if (!$con) {
    echo "ket noi that bai";
}
if (isset($_POST['register'])) {
    if (!empty($_POST['admin_username']) && !empty($_POST['admin_password']) && !empty($_POST['confirm_password']) && !empty($_POST['fullname']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['birthday']) && !empty($_POST['gender']) && !empty($_POST['email'])) {
        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];
        $confirm_password = $_POST['confirm_password'];
		$fullname = $_POST['fullname'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$birthday = $_POST['birthday'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
        $check_exist = mysqli_query($con, "select * from admin where admin_username = '$admin_username'");
        $admin_username_count = mysqli_num_rows($check_exist);
        $row_register = mysqli_fetch_array($check_exist);
        if ($admin_username_count > 0) {
            echo "<script>alert('Sorry, your username already exist in our database !')</script>";
        } else if ($row_register['admin_username'] != $admin_username && $admin_password == $confirm_password) {
            $run_insert = mysqli_query($con, "insert into admin(admin_username,admin_password,fullname,phone,address,birthday,gender,email) values ('$admin_username','$admin_password','$fullname','$phone','$address','$birthday','$gender','$email') ");
            if ($run_insert) {
                echo "<script>alert('Account has been created successfully!')</script>";
                echo "<script>window.open('login_admin.php','_self')</script>";
            }
		}
    }
}

?>
</body>
</html>