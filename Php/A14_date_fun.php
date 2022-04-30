<?php
echo("1.checkdate"."<br>");
var_dump(checkdate(12,31,400));#moth date year
echo "<br>";
var_dump(checkdate(2,29,2003));#moth date year
echo "<br>";
var_dump(checkdate(2,29,2004));#moth date year

echo("<br>2.date"."<br>");
echo date("d M Y")."<br>";
echo date("M /d/y");

echo("<br>4.time"."<br>");#date dettalis in array
print_r(getdate());

echo("<br>4.time"."<br>");
$t=time();
echo($t."<br>");
echo(date("y-m-d",$t));

?>
