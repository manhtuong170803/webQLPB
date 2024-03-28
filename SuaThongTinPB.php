<?php 
	$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
	mysqli_query($bienketnoi,"set names 'utf8'");
	$db_selected = mysqli_select_db($bienketnoi,'dulieu');
	$idpb = $_REQUEST['idpb'];
	$result = mysqli_query($bienketnoi,'select * from phongban where IDPB=\''.$idpb.'\'');
	echo '<form action="UpdateThongTinPB.php?idpb='.$idpb.'" method="POST">';
	echo '<table align="center">';
	echo '<tr><td colspan="2" align="center"><label style="font-size: 25px;font-weight: bold;font-family: Courier New;">Update Dữ Liệu Bảng Phòng ban</label></td></tr>';
	if($row = mysqli_fetch_array($result)){
		echo '<tr><th>Tên Phòng ban:</th><td align="center"><input type="text" name="tenpb" value = "'.$row[1].'" required></td></tr>';
		echo '<tr><th>Mô Tả:</th><td align="center"><input type="text" name="mota" value = "'.$row[2].'" required></td></tr>';
	}
	echo '<tr><td colspan="2" align="center" style="margin-left: 5px" ><input type="submit" name="ok" value="Save"/></td></tr>';
	echo '</table>';
	echo '</form>';
	mysqli_free_result($result);
	mysqli_close($bienketnoi);

?>