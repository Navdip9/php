<?php 
//Creating a connection 
$con = mysqli_connect("localhost", "root", "", "newdatabase1"); 
 
//Inserting a record into the employee table 
$sql = "insert into myplayers values(4, 'Shikhar', 'Dhawan', 'Delhi', 'India')"; 
mysqli_query($con, $sql); 
//Insert ID 
$id = mysqli_insert_id($con); 
print("Insert ID: ".$id ."<br>"); 
 
$sql = "insert into myplayers values(5, 'Jonathan', 'Trott', 'CapeTown', 'SouthAfrica')"; 
mysqli_query($con, $sql); 
$id = mysqli_insert_id($con); 
print("Insert ID: ".$id); 
 
//Closing the connection 
mysqli_close($con);
?>