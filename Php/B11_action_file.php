<?php

 session_start();
 $uname=$_POST['uname'];
 if($uname=="admin")
 {
	 $_SESSION["user"]=$uname;
	 header("Location:B12_login.php");
 }
 else
 {
	 header("Location:B10_index.php?fail=yes");
 }
 
 ?>