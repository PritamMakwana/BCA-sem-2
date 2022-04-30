<?php
#pass by URL
 $text=$_GET['messageText']; #B14_GD.php?messageText=hello
//$text="hello world";
 
 //Set a default text if none is specified
 if(strlen($text)<=0)
	 $text="No message specified.";
 //Create an image with the specified dimensions
 $image=imageCreate(300,150);#image width and height

 //Beckground color
 $color=imagecolorallocate($image,128,41,222);
 //Text color
 $colorBlue=imagecolorallocate($image,46,247,17);
 
 //Draw the String (image,font_size,space_side,space_top,text,color)
 imageString($image,10,10,10,$text,$colorBlue);
 //Set type of image and send the output
 header("Content-type: image/jpeg");
 imagejpeg($image);
 //Release memory
 imagedestroy($image);
 ?>
 