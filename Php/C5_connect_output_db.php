<form action="C5_mysqli_creat.php" method="post">
    Database Name:<input type ="text" name="dbname"><br>
	Table Name:<input type ="text" name="tab_name"><br>
    Server Name:<input type ="text" name="ser_name"><br>
    DB User Name:<input type ="text" name="db_uname"><br>
	DB Password Name:<input type ="text" name="db_pass"><br>
	<input type ="submit">
</form>
  
<?php
      if(isset($_POST['ser_name']))
	  {
		$file=fopen("C6_connect.php","w");
		$data="<?php \n error_reporting(0);\n";
		$data.="$"."conn=mysqli_connect('".$_POST['ser_name']."','".$_POST['db_pass']."');\n";
        $data.="mysqli_select_db("."$"."conn".",'".$_POST['dbname']."');";
		fwrite($file,$data."\n?>");
		fclose($file);
	  }
?>