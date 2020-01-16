
<?php 
if(isset($_COOKIE['std_id'])){ // ถ้ามี cookie std_id ทำในนี้
	echo $_COOKIE['std_id']."<br>";
	echo $_COOKIE['std_name']."<br>";
	echo $_COOKIE['std_username']."<br>";
	echo $_COOKIE['std_password']."<br>";
	header("refresh:2;url=index.php");// link ไปหน้า index.php ในเวลา 2 วิ
}else { ?>
<form method="POST">
	<input type="text" name="std_id" placeholder="รหัสนักศึกษา" required><br>
	<input type="text" name="std_name" placeholder="ชื่อ นามสกุล" required><br>
	<input type="text" name="std_username" placeholder="username" required><br>
	<input type="password" name="std_password" placeholder="password" required><br>
	<input type="submit" name="btn_regist" value="สมัคร">
	<input type="reset" name="reset" value="ยกเลิก">
</form>
<?php }
	if(isset($_POST['btn_regist'])){ // ถ้ากดปุ่มสมัครให้ทำในนี้
		$expire=time()+3600;// สร้างตัวแปล expire เก็บค่าเวลาปัจจุบัน + 60 
		setcookie("std_id",$_POST['std_id'],$expire);// สร้าง cookie ชื่อ std_id ค่าเป็น ที่ส่ง post std_id หมดเวลาใน expire ตามที่ตั้งไว้
		setcookie("std_name",$_POST['std_name'],$expire);// สร้าง cookie ชื่อ std_name ค่าเป็น ที่ส่ง post std_name หมดเวลาใน expire ตามที่ตั้งไว้
		setcookie("std_username",$_POST['std_username'],$expire);// สร้าง cookie ชื่อ std_username ค่าเป็น ที่ส่ง post std_username หมดเวลาใน expire ตามที่ตั้งไว้
		setcookie("std_password",$_POST['std_password'],$expire);// สร้าง cookie ชื่อ std_password ค่าเป็น ที่ส่ง post std_password หมดเวลาใน expire ตามที่ตั้งไว้
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";// link ไปหน้า index.php ในเวลา 0 วิ
	}
 ?>