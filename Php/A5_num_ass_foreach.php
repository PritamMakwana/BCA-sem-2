<?php
echo "1.Numeric Array <br><br>";
$cars=array("Volvo",false,10,10.9);
echo "I like".$cars[0]."<br>,".$cars[1]."<br> and ".$cars[2]."<br> value ".$cars[3]."<br>";

echo "<br>for loop use...<br>";

 for($c=0;$c<=3;$c++)
	 echo ("<br>value ".$cars[$c]);
 
 #========================================================
 
 echo "<br><br>2.Associative Array <br><br>";
 $stud=array("name"=>"nkp","eno"=>10,"class"=>"sem5");
 
 echo "ECHO:";echo($stud["name"]);
 echo "<br>PRINT_R:-";print_r($stud);
 echo "<br>VAR_DUMP:-"; var_dump($stud);
 
 echo "<br><br>foreach loop use...<br>";

 echo "$value<br>";
   foreach($stud as $value)
   {
	 echo "<br> value is :"."$value";
     }
	
	echo "<br> $value";
?>