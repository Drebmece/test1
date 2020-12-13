<?php
    include_once("connection/connection.php");

    $con = connection();

    $sql = "select * from home_address";
    $add = $con->query($sql) or die($con->error);
    $row = $add->fetch_assoc();
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
                <th>yuubin bangou</th>
                <th>last name</th>
            </tr>
        </thead>
        <tbody>
            <?php do{ ?>
            <tr>
                <td><?php echo $row['yuubin_bangou'];?></td>
                <td><?php echo $row['eki'];?></td>
            </tr>
            <?php }while($row=$add->fetch_assoc());?>
        </tbody>
            
    </table>
</body>
</html>