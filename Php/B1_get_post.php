   <html>
   <body>
   <form method="GET" action="B1_get_post.php">
  <!-- <form method="GET" action="B1_get_post.php">-->
    <label> First name:</label><br>
	<input type="text" name="fname"><br>
	
	<label> Last name:</label><br>
	<input type="text" name="lname"><br>
	
	<label> Password:</label><br>
	<input type="text" name="pwd">
	<br><br>
	
	<input type="submit" value="submit">
	</form>
	</body>
	</html>
	
	<?php
	
	//if(isset($_POST['fname']))
		if(isset($_GET['fname']))
	{
	//	echo"<br> Name is :".$_POST['fname']." ".$_POST['lname'];
	//	echo"<br> Password is :".$_POST['pwd'];
		
		echo"<br> Name is :".$_GET['fname']." ".$_GET['lname'];
		echo"<br> Password is :".$_GET['pwd'];
		
	}

	