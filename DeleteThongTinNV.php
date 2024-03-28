<?php 
	$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
	mysqli_query($bienketnoi,"set names 'utf8'");
	$db_selected = mysqli_select_db($bienketnoi,'dulieu');
	$idnv = $_REQUEST['idnv'];
	$result = mysqli_query($bienketnoi,'DELETE FROM nhanvien WHERE nhanvien.IDNV = \''.$idnv.'\'');
	header('Location: XuLyThongTinNV.php');
	mysqli_close($bienketnoi);
?>
