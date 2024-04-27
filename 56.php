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
 
// Fetching the fields 
while($info = mysqli_fetch_field($res)){ 
    $currentfield = mysqli_field_tell($res); 
    print("Current Field: ".$currentfield."<br>"); 
    print("Name: ".$info->name."<br>"); 
    print("Type: ".$info->type."<br>");
} 

// Free result set
mysqli_free_result($res); 
 
// Closing the connection 
mysqli_close($con);
?>
