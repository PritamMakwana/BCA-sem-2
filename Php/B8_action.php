<?php
 session_start();
 $uname=$_POST['uname'];
 $_SESSION["user"]=$uname;
 echo "action php";
 header ("Location:B9_login.php");
 ?>