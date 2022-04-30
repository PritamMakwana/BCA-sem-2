   <html>
   <body>
   <form method="POST" action="B2_request.php">
  <!-- <form method="GET" action="B2_request.php">-->
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
	
		if(isset($_REQUEST['fname']))
	{
		
		echo"<br> Name is :".$_REQUEST['fname']." ".$_REQUEST['lname'];
		echo"<br> Password is :".$_REQUEST['pwd'];
		
		#?fname=abcd&lname=live&pwd=ghfi
		
	}
?>
	