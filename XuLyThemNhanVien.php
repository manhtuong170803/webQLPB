<?php
	if(isset($_POST['ok'])){
		$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
		mysqli_query($bienketnoi,"set names 'utf8'");
		$db_selected = mysqli_select_db($bienketnoi,'dulieu');
		$idnv = $_POST['idnv'];
		$hoten = $_POST['hoten'];
		$idpb = $_POST['idpb'];
		$diachi = $_POST['diachi'];
		$result = mysqli_query($bienketnoi,'INSERT INTO nhanvien (IDNV, HoTen, IDPB, DiaChi) VALUES (\''.$idnv.'\', \''.$hoten.'\', \''.$idpb.'\', \''.$diachi.'\')');
		header('Location: XuLyThongTinNV.php');
		mysqli_close($bienketnoi);
	}
 ?>