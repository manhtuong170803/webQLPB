       <?php 
		$bienketnoi = mysqli_connect('127.0.0.1','root','') or die('Could not connect sql');
		mysqli_query($bienketnoi,"set names 'utf8'");
		$db_selected = mysqli_select_db($bienketnoi,'dulieu');
		
		$result = mysqli_query($bienketnoi,'select * from nhanvien');

		echo '<table border="1" width="100%">';
		echo '<tr><td colspan="4" align="center"><label style="font-size: 25px;font-weight: bold;font-family: Courier New;">Dữ Liệu Bảng Nhân Viên</label></td></tr>';
		echo '<tr><th>IDNV</th><th>Họ Tên</th><th>IDPB</th><th>Địa Chỉ</th></tr>';
		
		while($row = mysqli_fetch_array($result)){
			echo '<tr><td align="center">'.$row[0].'</td><td>'.$row[1].'</td><td align="center">'.$row[2].'</td><td>'.$row[3].'</td></tr>';
		}
		echo '</table>';
		mysqli_free_result($result);
		mysqli_close($bienketnoi);
	 ?>