<?php 
	if(isset($_POST['login'])){
		$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect sql');
		mysqli_query($bienketnoi,"set names 'utf8'");
		$db_selected = mysqli_select_db($bienketnoi,'dulieu');
		//-------------------------------------
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		
		$result = mysqli_query($bienketnoi,'select * from admin where Username=\''.$username.'\' and Password=\''.$pass.'\'');
		
		$User = mysqli_fetch_array($result);
		if($User != null){

			if($User[2] == 3){ 
				header("Location: GiaoDienAdmin.php");
			}else{
				echo "Bạn Không đủ quyền để truy cập !!!";
			}
		}else{
			echo "Lỗi Đăng Nhập không đúng !!!";
		}
		mysqli_free_result($result);
		mysqli_close($bienketnoi);
	}
	
?>