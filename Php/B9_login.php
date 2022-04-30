<?php
session_start();
 echo "login php";

if(isset($_SESSION["user"]))
{
	echo "Welcome, " . $_SESSION["user"] . ".<br>";
}
?>
<a href="<?php session_destroy(); ?>">Logout</a>
