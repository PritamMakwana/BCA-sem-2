<?php 
 error_reporting(0);
 $servername="localhost";
 $username="root";
 $password="";//balnk/null/empty
 #password="root";//for mobbile user
 #password not use a world and sapcace is error_get_last
 
//create connction
$conn=mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,'customer_database');

if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
//echo "connection successfully";
?>