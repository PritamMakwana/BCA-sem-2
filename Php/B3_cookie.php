<?php

 $cookie_name="user_name";
 $cookie_value="KSC";
 setcookie($cookie_name,$cookie_value,time()+ 300,"/");
 
 if(!isset($_COOKIE[$cookie_name]))
    {
		echo "Coookie named'".$cookie_name."' is not set!";
	}
else{
	echo "Cookie '". $cookie_name . "'is set!<br>";
	echo "value iss:". $_COOKIE[$cookie_name];
   }
   
   ?>
