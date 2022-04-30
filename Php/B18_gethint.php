<?php
//Array With name
$arr =Array("Aaraya","Bharat","Chintan","Dhara","Ajay","Chanadan","Bhaveash","Dhaval");
//get the q parameter frorm URL
$query=$_REQUEST["q"];
$hint="";
// looked all hints from array if $q is different form ""
if($query !=="")
  {
	  $query =strtolower($query);
	  $lenght=strlen($query);
	  
	  foreach($arr as $name)
	  {
		  if(stristr($query,substr($name,0,$lenght)))
		  {
			  if($hint==="")
			  {
				  $hint=$name;
			  }
			  else
			  {
				  $hint .=",$name";
			  }
			  
		  }
	  }
  }
  
 // Output "no suggestion" if no hint was found or output correct values
 echo $hint ===""?"no suggestion" : $hint;
 ?>
				  
