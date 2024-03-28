<!DOCTYPE html>
<html>
<head>
	<title>Thêm Thông Tin Nhân Viên</title>
</head>
<body>
	<?php  
	$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
	mysqli_query($bienketnoi,"set names 'utf8'");
	$db_selected = mysqli_select_db($bienketnoi,'dulieu');
	$result = mysqli_query($bienketnoi,'select * from phongban');

	?>
	<form action="XuLyThemNhanVien.php" method="POST">
		<table>
			<tr>
				<th colspan="2">Thêm Mới Nhân Viên</th>
			</tr>
			<tr>
				<td>IDNV:</td>
				<td><input type="text" name="idnv" required></td>
			</tr>
			<tr>
				<td>Họ Tên:</td>
				<td><input type="text" name="hoten" required></td>
			</tr>
			<tr>
				<td>IDPB:</td>
				<td><select name="idpb">
					<?php 
					while($row = mysqli_fetch_array($result)){
					echo '<option value="'.$row[0].'">'.$row[0].'</option>';
				}?>
				</select></td>
			</tr>
			<tr>
				<td>Địa Chỉ:</td>
				<td><input type="text" name="diachi" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Save" name="ok"></td>
			</tr>
		</table>
	</form>
</body>
</html>