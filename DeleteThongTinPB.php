<?php 
	$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
	mysqli_query($bienketnoi,"set names 'utf8'");
	$db_selected = mysqli_select_db($bienketnoi,'dulieu');
	$idpb = $_REQUEST['idpb'];
	$result = mysqli_query($bienketnoi,'DELETE FROM phongban WHERE phongban.IDPB = \''.$idpb.'\'');
	header('Location: XuLyThongTinPB.php');
	mysqli_close($bienketnoi);

?>
