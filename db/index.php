<?php require_once "./connect.php";  // import connect.php

if(isset($_POST['btn_login'])){  // case post btn_login
	$que=mysqli_query($conn,"select c_id from cv_test where c_username='".$_POST['username']."' && c_password='".$_POST['password']."'"); // query c_id where username password pass
	$chk=mysqli_num_rows($que); // count data
	if($chk==1){ // case count data is 1
		$sh=mysqli_fetch_array($que); // sh เก็บ array
		$_SESSION['c_id']=$sh['c_id']; // session c_id = ข้อมูล c_id จาก db
	}
}elseif(isset($_POST['btn_regist'])){ // case  post btn_regist
	$que=mysqli_query($conn,"insert into cv_test (c_name,c_username,c_password) values ('".$_POST['c_name']."','".$_POST['c_username']."','".$_POST['c_password']."')"); // insert data
	if(!$que){echo "insert error : ".mysqli_error($conn);} //case insert fail show error
	else{echo "insert ok";header("refresh:2;url=index.php");} //case insert success link to index
}

if(isset($_GET['regist'])){?> <!-- case get regist -->
	<form method="POST"><h3>regist</h3>
		<input type="text" name="c_name" placeholder="name" required><br>
		<input type="text" name="c_username" placeholder="username" required><br>
		<input type="text" name="c_password" placeholder="password" required><br><p>
		<input type="submit" name="btn_regist" value="regist"> <input type="reset" name="btn_clear" value="clear"><br><p>
		<a href="index.php">back</a>
	</form>
<?php }else{?><!-- out of case -->
	<form method="POST"><h3>login</h3>
		<input type="text" name="username" placeholder="username" required><br>
		<input type="text" name="password" placeholder="password" required><br>
		<input type="submit" name="btn_login" value="login"><br>
		<a href="?regist">regist</a>
	</form>
<?php }

if(isset($_SESSION['c_id'])){ // case isset session c_id
	header("refresh:0;url=info.php"); // link to info.php
}

?>
