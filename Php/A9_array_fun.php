<?php
  echo "<br><br>  9.sort===index";
  $cars=array("Volvo","BMW","Toyota");
  sort($cars);
  print_r($cars);
  
  echo "<br><br>  10.rsort ===index ";
  $cars=array("Volvo","BMW","Toyota");
  rsort($cars);
  print_r($cars);
  
  echo "<br><br> 11.asort";
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
   asort($age);
   print_r($age);
   
   echo "<br><br> 12.arsort";
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
   arsort($age);
   print_r($age);
   
   echo "<br><br> 14.ksort";
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
   ksort($age);
   print_r($age);
   
   echo "<br><br> 14.krsort";
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
   krsort($age);
   print_r($age);
   
   ?>