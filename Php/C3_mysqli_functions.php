<?php
#database set is a C1mysqli_connect.php
include("C1_sqli_connect.php");
$result=mysqli_query($conn,"SELECT *FROM customers");

#code type 1 =mysqli_insert_id
/*if($result){
	#echo "<br> TOtal colum fatched:".mysqli_num_fields("$result");
	
	$data=mysqli_fetch_array($result,MYSQLI_NUM);
	echo "id  : ".$data[3];
	print_r($data);
}

 $sqli="INSERT INTO customers (id, name, phone_number, address, city)
 VALUES ('34', 'pritam', '234', 'amreli', 'new amrelica')";
 #sql is  db  ina tabel id crate
 
 if(mysqli_query($conn,$sqli))
 {
	 echo "<br> new data insert with id:". mysqli_insert_id($conn);
 }
 */
 
#code type 2=mysqli_fetch_assoc

/*if($result) {
	for($i=0;$i<=5;$i++)
	{
		$data =mysqli_fetch_assoc($result);
		echo "<br>id: ".$data['id'];
		echo "<br>name: ".$data['name'];
		echo "<br>phone_number: ".$data['phone_number'];
		echo "<br>address: ".$data['address'];
		echo "<br>city: ".$data['city'];
	}
}*/

#code type 3 = mysqli_affected_rows
/*
if(mysqli_query($conn,"DELETE FROM customers WHERE id='33'"))
 {
	echo "<br>Number of Delete Record :".mysql_affected_Rows($conn);
 }
  
  else{   echo mysqli_error($conn); }
    mysqli_close($conn);
 
 */
 #code type 4 = mysqli_fetch_all
 
 /*if($result){
	 $data=mysqli_fetch_all($result);
	 foreach($data as $row ){print_r($row); echo "<br>";}
     }
	
	else{   echo mysqli_error($conn); }
    mysqli_close($conn);
 */
 
 ?>

	
	 
