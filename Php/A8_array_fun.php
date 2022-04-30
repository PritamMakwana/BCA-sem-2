<?php 
  #pritam
  echo "<br><br> 1.array_change_key_case";
  $age=array("peter"=>"abc","Ben"=>"37","Joe"=>"43");
  print_r(array_change_key_case($age,CASE_UPPER));
  
  echo "<br><br> 2.array_merge";
  $a1=array("red","green");
  $a2=array("blue","yellow");
  $a3=array_merge($a2,$a1);
  print_r($a3);
  
  echo "<br><br> 3.array_pop";
  $a=array("red","green","blue");
  array_pop($a);
  
  print_r($a);
  echo "<br><br> 4.array_push";
  array_push($a,"orange","yellow");
  print_r($a);
  
  echo "<br><br> 5.array_replace";
  $a1=array("red","green","orange","black","white");
  $a2=array("blue","yellow");
  $a1=array_replace($a1,$a2);
  print_r($a1);
  
  echo "<br><br> 6.array_search ===> ";
  $a=array("a"=>"red","b"=>"green","c"=>"blue");
  echo array_search("blue",$a);
  
  echo "<br><br> 7.array_unique";
  $a=array("a"=>"red","b"=>"green","c"=>"red");
  print_r(array_unique($a));
  
  echo "<br><br> 8.unique";
  $a=array("a"=>"red","b"=>"green","c"=>"red");
  print_r(array_unique($a));
  

  ?>
  