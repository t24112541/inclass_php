<?php 
define("db_host","localhost");
define("db_username","root");
define("db_password","");
define("db_name","cv_blob");
$conn=new mysqli(db_host,db_username,db_password,db_name);
if($conn->connect_error){echo "connect error :".$conn->connect_error;}
?>