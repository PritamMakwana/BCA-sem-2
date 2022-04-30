<?php
 session_start(); //start the session
 
 if(isset($_SESSION["favcolor"])&& isset($_SESSION["favanimal"]))
 {
	 echo "favorite color is".$_SESSION["favcolor"].".<br>";
	 echo "favorite animal is".$_SESSION["favanimal"].".<br>";
 }
 print_r($_SESSION);
 ?>

	 