<?php 
$con = mysqli_connect("localhost", "root", "", "newdatabase"); 

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute a query
$res = mysqli_query($con, "SELECT * FROM myplayers"); 

// Check if query was successful
if (!$res) {
    die("Query failed: " . mysqli_error($con));
}
//Number of fields 
$count = mysqli_num_fields($res); 
print("Number of fields in the result: ".$count); 
 
//Closing the statement 
mysqli_free_result($res); 
 
//Closing the connection 
mysqli_close($con);?> 