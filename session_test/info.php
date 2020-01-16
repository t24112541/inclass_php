<?php 
// echo $_COOKIE['username'];
if(isset($_COOKIE['username'])){ ?>  <!-- ถ้ามี cookie username ให้ทำในส่วนนี้ ////////////////////////////////////-->
	<h1>Welcome <?=$_COOKIE['std_name']?></h1>
	<h4>รหัสนักศึกษา : <?=$_COOKIE['std_id']?></h4>
	<h4>ชื่อ นามสกุล : <?=$_COOKIE['std_name']?></h4>
	<h4>username : <?=$_COOKIE['std_username']?></h4>
	<h4>password : <?=$_COOKIE['std_password']?></h4>
	<a href="?logout">Logout</a>
<?php 
}else{ ////////////////////////////////////////////////////////// ถ้าไม่มี cookie username 
	echo "<meta http-equiv='refresh' content='0;url=index.php'>"; // ให้ย้อนกลับไปหน้า index.php ในเวลา 0 วิ
}
if(isset($_GET['logout'])){ //  ถ้ามีการส่ง get logout ให้ทำในนี้ 
	setcookie("username",'',$expire=time()-60); // กำหนดค่า cookie username ใหม่มีค่าเป็นว่าง และหมดเวลาไปแล้ว
	echo "<meta http-equiv='refresh' content='0;url=index.php'>"; // ย้อนกลับไปหน้า index.php ในเวลา 0 วิ
}
?>