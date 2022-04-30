<?php

echo "<br><br>Multidimensional Array<br><br>";

$stud=array("stud1"=>array("name"=>"xyz","eno"=>1234,"class"=>"BCA4"),
            "stud2"=>array("name"=>"abc","eno"=>5678,"class"=>"BCA2") );
			
	foreach($stud as $studarr =>$arr)
	{
	echo "$studarr====<br>";
		foreach($arr as $fkey=>$fvalue)
		{
			echo"$fkey====$fvalue<br>";
		}
		
	}
	
?>
			
		
			
			
			