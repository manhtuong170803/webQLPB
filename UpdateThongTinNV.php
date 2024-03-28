<?php
	if(isset($_POST['ok'])){
		$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
		mysqli_query($bienketnoi,"set names 'utf8'");
		$db_selected = mysqli_select_db($bienketnoi,'dulieu');
		$idnv = $_REQUEST['idnv'];
		$hoten = $_POST['hoten'];
		$diachi = $_POST['diachi'];
		$result = mysqli_query($bienketnoi,'UPDATE nhanvien SET HoTen = \''.$hoten.'\', DiaChi = \''.$diachi.'\' WHERE nhanvien.IDNV = \''.$idnv.'\'');
		header('Location: XuLyThongTinNV.php');
		mysqli_close($bienketnoi);
	}
 ?>