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
//Seek to 2nd row 
mysqli_data_seek($res, 1); 
 
//Fetching the contents of the row 
$row = mysqli_fetch_row($res); 
print_r($row); 
 
//Closing the statement 
mysqli_free_result($res); 
 
//Closing the connection 
mysqli_close($con);?> 