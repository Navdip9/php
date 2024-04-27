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
//Fetching all the rows as objects 
while($obj = mysqli_fetch_object($res)){ 
print("ID:  ".$obj->ID."<br>"); 
print("First_Name: ".$obj->First_Name."<br>"); 
print("Last_Name: ".$obj->Last_Name."<br>"); 
print("Place_Of_Birth: ".$obj->Place_Of_Birth."<br>"); 
print("Country: ".$obj->Country."<br>"); 
} 
//Closing the statement 
mysqli_free_result($res); 
 
//Closing the connection 
mysqli_close($con);?> 