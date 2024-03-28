<?php 
	$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
	mysqli_query($bienketnoi,"set names 'utf8'");
	$db_selected = mysqli_select_db($bienketnoi,'dulieu');
	$result = mysqli_query($bienketnoi,'select * from phongban');
	
	echo '<table border="1" width="100%">';
	echo '<tr><td colspan="4" align="center"><label style="font-size: 25px;font-weight: bold;font-family: Courier New;">Dữ Liệu Bảng Phòng Ban</label></td></tr>';
	echo '<tr><th>IDPB</th><th>Tên Phòng Ban</th><th>Mô Tả</th><th>Xem Nhân Viên</th></tr>';
	
	while($row = mysqli_fetch_array($result)){
		echo '<tr><td align="center">'.$row[0].'</td><td>'.$row[1].'</td><td align="center">'.$row[2].'</td><td align="center"><a href="XemThongTinNVPB.php?idpb='.$row[0].'">xxx</a></td></tr>';
	}
	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($bienketnoi);
 ?>