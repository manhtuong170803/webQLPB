<?php 
	$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
	mysqli_query($bienketnoi,"set names 'utf8'");
	$db_selected = mysqli_select_db($bienketnoi,'dulieu');
	
	$idpb = $_REQUEST['idpb'];//pb02
	$result = mysqli_query($bienketnoi,'select * from nhanvien where IDPB=\''.$idpb.'\'');
	echo '<table border="1" width="100%">';
	echo '<caption>Dữ Liệu Bảng Nhân Viên</caption>';
	echo '<tr><th>IDNV</th><th>Họ Tên</th><th>IDPB</th><th>Địa Chỉ</th></tr>';
	while($row = mysqli_fetch_array($result)){
		echo '<tr><td align="center">'.$row[0].'</td><td>'.$row[1].'</td><td align="center">'.$row[2].'</td><td>'.$row[3].'</td></tr>';
	}
	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($bienketnoi);
 ?>