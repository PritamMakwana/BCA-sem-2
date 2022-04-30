<?php

$t=22;

echo "time is".$t;

echo ",and will give the following message:<br>";

if($t<"12")
{
	echo "Good morinng!";
}

elseif($t<"18")

{
	echo "Good Afternoon!";	
}
elseif($t<"22")
{
	echo "Good Evening!";	
}
else
{
	echo "Good Night!";	
}

?>