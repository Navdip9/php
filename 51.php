<?php 
//Creating a connection 
$con = mysqli_connect("localhost", "root", "", "abc123"); 
 
//Executing the multi query 
$query = "SELECT * FROM user"; 
 
//Retrieving the records 
$res = mysqli_query($con, $query, MYSQLI_USE_RESULT);
if ($res) { 
    while ($row = mysqli_fetch_row($res)) { 
    print("Id: ".$row[0]."<br>"); 
    print("Name: ".$row[1]."<br>"); 
    } 
    } 
    //Closing the connection 
    mysqli_close($con);?> 