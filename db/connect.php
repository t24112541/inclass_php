<?php session_start(); // เปิด session
$conn=mysqli_connect("localhost","root","","cv"); // connect DB
if(mysqli_connect_errno()){echo "connect error:".mysqli_connect_error();} // connect fail
else{ // not fail
	mysqli_set_charset($conn,"utf8");  // set charset
}



?>