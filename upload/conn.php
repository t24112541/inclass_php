<?php $conn=new mysqli("localhost","root","","cv_copy");
$conn->set_charset("utf8");
if(!$conn){echo "connect error : ".$conn->error;}?>