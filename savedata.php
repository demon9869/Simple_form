<?php


$stu_name =  $_POST['name'];

$stu_email = $_POST['email'];


/*This PHP code inserts data into a MySQL database using the POST method
These lines retrieve the data from the form submitted using the POST method 
and assign the values to three variables*/



$conn = mysqli_connect("localhost", "root", "", "first_form") or die("Connection Failed");
/*This line creates a new MySQL database connection 
using the mysqli_connect() function. The function takes 
four parameters*/


$sql ="Insert into student(name, email) VALUES ('{$stu_name}', '{$stu_email}')";
/*This line creates an SQL query that inserts a new row into the "student" table in the database*/


$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
/*This line executes the SQL query using the mysqli_query() function and assigns the result to the $result */

header("Location: http://localhost/form/form.php");

mysqli_close($conn);

// $std_name = $_POST['name'];
// $std_email= $_POST['email'];
// $std_password = $_POST['password'];

// $conn = mysqli_connect("localhost", "root", "", "first_form");

// $sql = "Insert into student values ('$std_name', '$std_email', '$std_password')";

// $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

// header("Location: http://localhost/form/form.php");

// mysqli_close($conn);
























?>
