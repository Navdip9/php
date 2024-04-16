<?php 
$con = mysqli_connect("localhost", "root", "", "newdatabase"); 
 
//Retrieving the contents of the table 
$result = mysqli_query($con, "SELECT * FROM myplayers"); 
 
//Number of rows 
$count = mysqli_num_rows($result); 
print("Number of rows in the result: ".$count); 
 
//Closing the statement 
mysqli_free_result($result); 
 
//Closing the connection 
mysqli_close($con);?> 