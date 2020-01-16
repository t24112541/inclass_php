<?php
session_start();
 session_destroy();echo "logout success!";header("refresh:2;url=index.php");?>