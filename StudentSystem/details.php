<?php
    include_once("connection/connection.php");
    $con = connection();

    $id = $_GET['ID'];

    $sql = "select * from student_list where id = '$id'";
    $details = $con->query($sql) or die ($con->error);
    $row = $details->fetch_assoc();
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
    <a href="index.php">back to index</a>
    <a href="edit.php?ID=<?php echo $id; ?>">edit</a>
    <form action="delete.php" method="post">
        <button type="submit" name="delete">delete</button>
        <input hidden type="text" name="ID" id="" value="<?php echo $row['id']?>">
    </form>
    <br>
    <?php echo $row['first_name'] . " " . $row['last_name'] . " " . $row['gender']?>
    
</body>
</html>