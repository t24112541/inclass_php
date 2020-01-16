<?php include "./connect.php"; // import connect.php
if(isset($_SESSION['c_id'])){ //case isset session c_id
	$que=mysqli_query($conn,"select * from cv_test where c_id='".$_SESSION['c_id']."'"); // select data from cv_test where session c_id
	$sh=mysqli_fetch_array($que); // data assign to sh
	?>
		<h3>รหัส : <?=$sh['c_id']?></h3>
		<h4>ชื่อ :<?=$sh['c_name']?></h4>
		<h4>username :<?=$sh['c_username']?></h4>
		<!-- <h4>password :<?=$sh['c_password']?></h4> -->
	
		<a href="?logout">logout</a>
<?php }else{ // out of case 
	header("location:index.php"); // link to index.php
}
if(isset($_GET['logout'])){session_destroy();echo "Logout success!";header("location:index.php");} //case get logout destroy session and link to index
?>
