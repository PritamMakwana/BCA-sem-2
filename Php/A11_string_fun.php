<?php
echo "<br> 6.strtolower()"."<br>";
echo strtolower("Hello WORLD.")."<br>";//lower case

echo "<br> 7.strtoupper()"."<br>";//upper case
echo strtoupper("Hello WORLD.")."<br>";//upper case

echo "<br> 8.strpos()"."<br>";//position of the first occurrece
echo strpos("I love php,I love php too!",",")."<br>";

echo "<br> 9.strstr()"."<br>";#return string from matching
echo strstr("Heoll world!","world")."<br>";

echo "<br> 10.trim()"."<br>";
$str="Hello World!";
echo $str."<br>";
echo trim($str,"Hel")."<br>";#removes given string from both end

echo "<br> 11.substr()"."<br>";
echo substr("Hello world",6)."<br>";
?>