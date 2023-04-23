<?php
    include 'conn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $stus_name = $_GET['name'];
        $sql = "SELECT * FROM student WHERE Name = '$stus_name'";
        //This line defines a SQL query that selects all records from the student table.
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        

        if(mysqli_num_rows($result) > 0){
            //This line checks if the query returned any rows. If so, it proceeds to display the form and table
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form action="updatedata.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['Name'];?>"/><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['Email'];?>"/><br><br>
       
        <input type="submit" name="submit" value="Update"></input>
    </form>
    <?php }
        }?>
</body>
</html>