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

 
while ($row = mysqli_fetch_row($res)) { 
print("ID: ".$row[0]."<br>"); 
print("First_Name: ".$row[1]."<br>"); 
print("Last_Name: ".$row[2]."<br>"); 
print("Place_Of_Birth: ".$row[3]."<br>"); 
print("Country: ".$row[4]."<br>"); 
} 

//Closing the statement 
mysqli_free_result($res); 
 
//Closing the connection 
mysqli_close($con);?> 