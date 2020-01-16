<?php require_once("./connect.php");
if(empty($_SESSION['u_id'])){echo "กรุณาเข้าสู่ระบบก่อน!";header("refresh:2;url=index.php");}
else{
	$sql="select * from cv_users where u_id='{$_SESSION['u_id']}'";
	$que=$conn->query($sql);
	$sh=$que->fetch_array();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><center>
	<img src="display.php?col=u_img_1&&u_id=<?=$sh['u_id']?>" width="10%">&nbsp;
	<img src="display.php?col=u_img_2&&u_id=<?=$sh['u_id']?>" width="10%"><p>
	รหัสนักศึกษา : <?=$sh['u_id']?><p>
	ชื่อ : <?=$sh['u_name']?><p>
	username : <?=$sh['u_username']?><p>
	สมัครเมื่อ : <?=$sh['u_date']?><p>
	<a href="logout.php">logout</a>
</body>
</html>
<?php } ?>