<?php
    include("C1_sqli_connect.php");//simliar to #include c language
    mysqli_select_db($conn,"customer_database");//select database
	
	
//Return name of  current default database
    if ($result = mysqli_query($conn, "SELECT DATABASE()")) {
        $row = mysqli_fetch_row($result);
        echo"<br>Default database is " . " <br> ".$row[0];
    }
    if ($result = mysqli_query($conn,"SELECT * FROM customers")) {
        $row = mysqli_fetch_row($result);
		//print_r($row);

        if (mysqli_num_rows($result) > 0) {
			 echo "<br> id &nbsp; &nbsp;:=" . $row[0];
            echo "<br> name  &nbsp; &nbsp;          :=" . $row[1];
            echo "<br> phone_number  &nbsp; &nbsp;  :=" . $row[2];
            echo "<br> address     &nbsp; &nbsp;    :=" . $row[3];
			echo "<br> city    &nbsp;&nbsp;        :=" . $row[4];

        }
		else{
			echo "<br>No data found  !!!" ; 
			}
    }
    else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>