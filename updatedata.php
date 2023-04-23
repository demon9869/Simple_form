<?php


    $stus_name=$_POST['name'];
    $std_name = $_POST['name'];
    $std_email= $_POST['email'];

    /** These lines of code use the $_POST superglobal array to extract the values of the "name" and "email" fields 
     * submitted by the HTML form.The values are stored in the $stus_name, $std_name, and $std_email variables.*/
    
    $conn = mysqli_connect("localhost", "root", "", "first_form");
    
    $sql = "UPDATE student SET name = '{$std_name}', email = '{$std_email}' WHERE name = '{$stus_name}'";
    /**This line constructs an SQL query that updates the "name" and "email" fields of the "student" table where the "name" field matches the value of $stus_name. 
     * The curly braces around $std_name and $std_email are used to insert their values into the query string. */
    
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    //This line executes the SQL query using the mysqli_query function and stores the result in the $result variable. 
    
    header("Location: http://localhost/form/form.php");


mysqli_close($conn);


?>