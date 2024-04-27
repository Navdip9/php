<?php 
$con = mysqli_connect("localhost", "root", "", "newdatabase"); 

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute a query
$res = mysqli_query($con, "SELECT * FROM myplayers "); 

// Fetching all the rows as associative arrays
while ($obj = mysqli_fetch_assoc($res)) { 
    print("ID:   ".$obj["ID"]."<br>"); 
    print("First_Name: ".$obj["First_Name"]."<br>"); 
    print("Last_Name: ".$obj["Last_Name"]."<br>"); 
    print("Place_Of_Birth: ".$obj["Place_Of_Birth"]."<br>"); 
    print("Country: ".$obj["Country"]."<br>"); 
} 

// Free result set
mysqli_free_result($res); 
 
// Closing the connection 
mysqli_close($con);
?>
