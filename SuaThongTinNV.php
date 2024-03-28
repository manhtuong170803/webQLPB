<?php 
	$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
	mysqli_query($bienketnoi,"set names 'utf8'");
	$db_selected = mysqli_select_db($bienketnoi,'dulieu');
	$idnv = $_REQUEST['idnv'];
	$result = mysqli_query($bienketnoi,'select * from nhanvien where IDNV=\''.$idnv.'\'');
	echo '<form action="UpdateThongTinNV.php?idnv='.$idnv.'" method="POST">';
	echo '<table align="center">';
	echo '<tr><td colspan="2" align="center"><label style="font-size: 25px;font-weight: bold;font-family: Courier New;">Update Dữ Liệu Bảng Nhân Viên</label></td></tr>';
	if($row = mysqli_fetch_array($result)){
		echo '<tr><th>Họ và Tên:</th><td align="center"><input type="text" name="hoten" value = "'.$row[1].'" required></td></tr>';
		echo '<tr><th>Địa Chỉ:</th><td align="center"><input type="text" name="diachi" value = "'.$row[3].'" required></td></tr>';
	}
	echo '<tr><td colspan="2" align="center" style="margin-left: 5px" ><input type="submit" name="ok" value="Save"/></td></tr>';
	echo '</table>';
	echo '</form>';
	mysqli_free_result($result);
	mysqli_close($bienketnoi);

?>