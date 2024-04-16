<?php 
//Creating a connection 
$con = mysqli_connect("localhost", "root", "", "newdatabase"); 
 
//Query to retrieve all the rows of myplayers table 
mysqli_query($con, "SELECT * FROM myplayers"); 
 
//Effected rows 
$rows = mysqli_affected_rows($con); 
print("Number of affected rows: ".$rows); 
 
//Closing the connection 
mysqli_close($con);?>