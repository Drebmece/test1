<?php
    include_once("connection/connection.php");
    $con = connection();

    $sql = "select * from student_list order by id desc";
    $student = $con->query($sql) or die ($con->error);
    $row = $student->fetch_assoc();

    if(isset($_GET['deleted'])){
        echo "successfuly deleted";
    }else{
        echo "not deleted";
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Student Management System</h1>
    <a href="add.php">add</a>
    <table>
        <thead>
            <tr>
                <td></td>
                <td>first name</td>
                <td>last name</td>
                <td>gender</td>
            </tr>
        </thead>
        <tbody>
            <?php do{?>
            <tr>
                <td><a href="details.php?ID=<?php echo $row['id']?>">view</a></td>
                <td><?php echo $row['first_name']?></td>
                <td><?php echo $row['last_name']?></td>
                <td><?php echo $row['gender']?></td>
            </tr>
            <?php }while($row = $student->fetch_assoc());?>
        </tbody>
    </table>
</body>
</html>