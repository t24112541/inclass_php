<?php
session_start();
$conn=new mysqli("localhost","root","","cv_blob_test");
if($conn->connect_error){echo "connect error:".$conn->connect_error;}
?>