<?php
if(isset($_GET["fail"])){
	
	echo "username or Password wrong"."<br>";
}
?>

<form mathod="post" action="B11_action_file.php">
  
   <label>Username:</label><br>
   <input type="text" id="uname" name="uname"><br>
   
   <label>Password:</label><br>
   <input type="password" id="pwd" name="pwd">
   <br><br>
   
   <input type="submit" value="submit">
  </form>