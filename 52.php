<?php 
$con = mysqli_connect("localhost", "root", "", "newdatabase"); 
 
mysqli_query($con, "CREATE TABLE myplayers(ID INT, First_Name VARCHAR(255), Last_Name 
VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))"); 
print("Table Created...... "."<br>"); 
mysqli_query($con, "INSERT INTO myplayers values(1, 'Sikhar', 'Dhawan', 'Delhi', 'India')"); 
mysqli_query($con, "INSERT INTO myplayers values(2, 'Jonathan', 'Trott', 'CapeTown', 
'SouthAfrica')"); 
mysqli_query($con, "INSERT INTO myplayers values(3, 'Kumara', 'Sangakkara', 'Matale', 
'Srilanka')"); 
print("Record Inserted ...... "."<br>"); 
 
//Retrieving the contents of the table 
$res = mysqli_query($con, "SELECT * FROM myplayers"); 
 
//Fetching all the rows as arrays 
while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){ 
print("ID: ".$row["ID"]."<br>"); 
print("First_Name: ".$row["First_Name"]."<br>"); 
print("Last_Name: ".$row["Last_Name"]."<br>"); 
print("Place_Of_Birth: ".$row["Place_Of_Birth"]."<br>"); 
print("Country: ".$row["Country"]."<br>"); 
} 
//Closing the statement 
mysqli_free_result($res); 
 
//Closing the connection
mysqli_close($con);?>