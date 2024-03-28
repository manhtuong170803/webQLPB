
<!DOCTYPE html>
<html>
<head> 
	<title>Login</title>
</head>
<body>
	<form action="XuLyLogin.php" method="POST">
		<table>
			<tr>
				<td colspan="2" align="center" >Login</td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>