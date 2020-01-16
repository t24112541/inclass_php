<?php
	$month=time()+2592000;
	$time_now=date("F jS,Y-g:i a");
	if(isset($_COOKIE['LastVisit'])){
		$last=$_COOKIE['LastVisit'];
		$month=time()+2592000;
		echo "welcome back!<br>";
		echo "you last visited on ".$last;
	}else{
		@setcookie(LastVisit,$time_now,$month);
		echo "welcome to our site";
	}
	echo "<br> Hi...<br>";
	echo "Today is $time_now<br>";
?>