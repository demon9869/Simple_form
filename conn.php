<?php

//  In these lines, we define four variables containing 
// the database credentials we need to connect to the MySQL database.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//new object and constructor takes four parameters.

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";





// $servername= "localhost";
// $username = "root";
// $password ="";
// $dbname ="first_form";

// $conn= new mysqli($servername, $username, $password, $dbname);

// if($conn->connect_error){
//   die("Connection failed: " . $conn->connect_error);
// }
// echo("Connection successfull");


?>
