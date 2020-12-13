<?php
    include_once("connection/connection.php");

    $con = connection();

    $sql = "select * from student_list";
    $students = $con->query($sql) or die($con->error);
    $row = $students->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>first names</th>
                <th>last name</th>
            </tr>
        </thead>
        <tbody>
            <?php do{ ?>
            <tr>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
            </tr>
            <?php }while($row=$students->fetch_assoc());?>
        </tbody>
            
    </table>
</body>
</html>