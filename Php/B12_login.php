<?php

session_start();
if(isset($_SESSION["user"]))
{
	echo "Welcome," . $_SESSION["user"]. ".<br>";
	
	echo "<a href ='session_destroy(); header('Location:B10_index.php');>Logout</a>"."<br>";
}
?>