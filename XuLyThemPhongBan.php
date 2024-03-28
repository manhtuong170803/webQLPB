<?php
	if(isset($_POST['ok'])){
		$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
		mysqli_query($bienketnoi,"set names 'utf8'");
		$db_selected = mysqli_select_db($bienketnoi,'dulieu');
		$idpb = $_POST['idpb'];
		$tenpb = $_POST['tenpb'];
		$mota = $_POST['mota'];
		$result = mysqli_query($bienketnoi,'INSERT INTO phongban (IDPB, TenPB, MoTa) VALUES (\''.$idpb.'\', \''.$tenpb.'\', \''.$mota.'\')');
		header('Location: XuLyThongTinPB.php');
		mysqli_close($bienketnoi);
	}
 ?>