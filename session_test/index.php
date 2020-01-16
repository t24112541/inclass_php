
	<form method="POST">
		<input type="text" name="username" placeholder="username" required><br>
		<input type="password" name="password" placeholder="password" required><br>
		<input type="submit" name="login" value="Login">
	</form>
	<a href="regist.php">regist</a><br>
<?php 
 ///////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['login'])){  // ถ้ามีการส่ง post login ให้ทำในนี้
		if($_POST['username']==$_COOKIE['std_username'] && $_POST['password']==$_COOKIE['std_password']){ // ถ้าข้อมูลที่ส่งมาตรงกับ cookie ให้ทำในนี้
			$expire=time()+600;  // สร้างตัวแปล expire เก็บค่าเวลาปัจจุบัน + 60 
			setcookie("username",$_POST['username'],$expire); // สร้าง cookie ชื่อ username ค่าเป็น ที่ส่ง post username หมดเวลาใน expire ตามที่ตั้งไว้
 			// echo "<meta http-equiv='refresh' content='0;url=info.php'>"; // link ไปหน้า info.php ในเวลา 0 วิ
 			// header( "refresh:5;url=wherever.php" );
 			header("refresh:0;url=info.php");
		}else{
			echo "<i style='color:red;font-size:40px'>invalid data</i>"; // ถ้าเช็คข้อมูลแล้วไม่ตรงกับ cookie ให้แสดงส่วนนี้
		}		
}///////////////////////////////////////////////////////////////////////////////////////////////////////

?>