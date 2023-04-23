<?php
    include 'conn.php';
?>
<?php

$stus_name = $_GET['name'];

$sql = "DELETE from student WHERE Name = '$stus_name'";
        //This line defines a SQL query that selects all records from the student table.
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/form/form.php");

mysqli_close($conn);


?>