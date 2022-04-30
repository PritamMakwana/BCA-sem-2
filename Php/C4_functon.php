<?php
#database set is a C1mysqli_connect.php
include("C1_sqli_connect.php");
$result=mysqli_query($conn,"SELECT *FROM customers");
error_reporting(10);

# 1 code type mysqli_fetch_field
/*if($result)
{
	while($data=mysqli_fetch_field($result))
	{
		print_r($data);
		//echo ("ID number ".$data->id ."<br>");
	}
}*/


# 2 code type mysqli_fetch_object


if($result)
{
	while($row = mysqli_fetch_object($result))
	{
		echo( "ID number: ".$row->id."Name: ".$row->name."<br>");
		//row['id']===$row->id
	}
}


# 3 code type mysqli_data_seek
/*
if($result)
{
	mysqli_data_seek($result,2);
	$row=mysqli_fetch_row($result);
	echo( "ID number: ".$row[0]."Name: ".$row[1]."<br>");
}
*/
 #use a 1,2,3, function ypur requild
 else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
	
	?>