
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
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

<body>
    <?php
        $sql = "SELECT * FROM student";

        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");


        if(mysqli_num_rows($result) > 0){
    
    ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <!-- <th>Password</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    /*The while loop fetches each row of data from the result set one at a time and 
                    assigns it to the $row variable. The data from each row is then displayed in a table */
            ?>
            <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Email'];?></td>
    
                <td>
                    <a href="edit.php?name=<?php echo $row['Name'];?>">Edit</a>
                    <a href="delete.php?name=<?php echo $row['Name'];?>">Delete</a>
                </td>
            </tr>
            <?php 
                } // end while
            ?>
        </tbody>
    </table>
    <?php 
        } // end if 
        else{
            echo "<h2>No record found</h2>";
        }
    mysqli_close($conn);    
    ?>
</body>
</html>


