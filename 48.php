<?php 
//Creating a connection 
$con = mysqli_connect("localhost", "root", "", "abc123"); 
//Query to retrieve all the rows of employee table 
mysqli_query($con, "SELECT * FORM employee"); 
//Error 
$error = mysqli_error($con); 
print("Error Occurred: ".$error); 
//Closing the connection 
mysqli_close($con);?> 