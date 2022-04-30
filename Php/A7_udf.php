<?php
#NO argrument no return value
function writeMsg(){
	echo"Hello world!";
}
#argrument no return value
function familyName($fname){
	echo $fname;
}
#with argrument with return value
function addNumber($a,$b){
	return $a+$b;
}
#NO argrument with return value
function saysomething(){
	return "saysomething";
}
writeMsg();
familyName("<br>KSC");
echo("<br>".saysomething());
echo ("<br>".addNumber(10,20));//call the function
?>


