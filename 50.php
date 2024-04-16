<?php 
//Creating a connection 
$con = mysqli_connect("localhost", "root", "", "abc123"); 
 
//Selecting the database 
mysqli_query($con, "CREATE DATABASE NewDatabase"); 
mysqli_select_db($con, "NewDatabase"); 
 
//Retrieving the current database name 
$res = mysqli_query($con, "SELECT DATABASE()"); 
 
while ($row = mysqli_fetch_row($res)) { 
print("Current Database: ".$row[0]); 
} 
 
//Closing the connection 
mysqli_close($con);?> 
