<?php
    include_once("connection/connection.php");
    $con = connection();

    if(isset($_POST['addStudent'])){
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $gender = $_POST['gender'];

        $sql = "insert into student_list(first_name,last_name,gender)values('$fn','$ln','$gender')";
        $con->query($sql) or die ($con->error);

        echo header("location:index.php");
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
    <a href="index.php">back to index</a><br>

    <form action="" method="post">
        <label>first name</label>
        <input type="text" name="fn" id="">
        <label>last name</label>
        <input type="text" name="ln" id="">
        <label>gender</label>
        <label>Male</label>
        <input type="radio" name="gender" id="" value="Male">
        <label>Female</label>
        <input type="radio" name="gender" id="" value="Female">
        <input type="submit" value="add student" name="addStudent">
    </form>
</body>
</html>