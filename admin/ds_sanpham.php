<?php
		include "connect.php";
	 	$sql = "select * from song ";
	 	$result = mysqli_query($con,$sql);

?>

<div class="infor">

				<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr>
						<th width="50px;">STT</th>
						<th width="50px;">Name</th>
						<th width="200px;">Price</th>
						<th width="200px;">Description</th>
						<th width="100px;">File</th>
						<th width="200px;">Image</th>
						<th width="100px;"><a href="index_product.php?quanly=add_product">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				
			 ?>
					<tr>
						<td><?php echo $row['songID']; ?> </td>
						<td><?php echo $row['songName']; ?></td>
                        <td><?php echo $row['songPrice']; ?> </td>
						<td><?php echo $row['songDescription']; ?></td>
						<td><audio controls loop src="upload/<?php echo $row['songFile']; ?>"></audio></td>
						<td><img src="upload/<?php echo $row['songImage']; ?>" style="max-width: 100px;"</td>
						<td><a href="index_product.php?quanly=edit_product&songID=<?php echo $row['songID']; ?>">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index_product.php?quanly=delete_product&songID=<?php echo $row['songID']; ?>">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
			</div>