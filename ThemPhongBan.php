<!DOCTYPE html>
<html>
<head>
	<title>Thêm Thông Tin Nhân Viên</title>
</head>
<body>
	<form action="XuLyThemPhongBan.php" method="POST">
		<table>
			<tr>
				<th colspan="2">Thêm Mới Phòng Ban</th>
			</tr>
			<tr>
				<td>IDPB:</td>
				<td><input type="text" name="idpb" required></td>
			</tr>
			<tr>
				<td>Tên Phòng Ban:</td>
				<td><input type="text" name="tenpb" required></td>
			</tr>
			<tr>
				<td>Mô Tả:</td>
				<td><input type="text" name="mota" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Save" name="ok"></td>
			</tr>
		</table>
	</form>
</body>
</html>