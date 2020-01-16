<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="registercontroller.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="u_id" placeholder="student id" required><p>
		<input type="text" name="u_name" placeholder="name" required><p>
		<input type="text" name="u_username" placeholder="username" required><p>
		<input type="text" name="u_password" placeholder="password" required><p>
		<input type="file" name="u_img_1"  required><p>
		<input type="file" name="u_img_2"  required><p>
		<input type="submit" name="btn_regist" value="register"><p>
		<a href="index.php">back</a>
	</form>
</body>
</html>