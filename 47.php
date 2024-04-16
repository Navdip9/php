<?php 
$host = "localhost"; 
$username = "root"; 
$passwd = ""; 
$dbname = "abc123"; 
//Creating a connection 
$con = mysqli_connect($host, $username, $passwd, $dbname); 
 
//Closing the connection 
$res = mysqli_close($con); 
 
if($res){ 
print("Connection Closed");    
}else{ 
print("There is an issue while closing the connection"); 
}?>