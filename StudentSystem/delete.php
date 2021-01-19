<?php
    include_once("connection/connection.php");
    $con = connection();

    $id = $_POST['ID'];
    

    $sql = "select * from student_list where id ='$id'";
    $student = $con->query($sql) or die ($con->error);
    $row = $student->fetch_assoc();

    if(isset($_POST['deleteStudent'])){
        $id = $_POST['ID'];
        echo $id;
        $sqlDel = "delete from student_list where id='$id'";
        $con->query($sqlDel)or die ($con->error);
        echo header("location:index.php?deleted=1");

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
    <a href="index.php">back to index</a>
    <a href="details.php?ID=<?php echo $id;?>">back to details</a>

    <form action="" method="post">
    <input hidden type="text" name="ID" id="" value="<?php echo $row['id']?>">
        <label>first name</label>
        <input type="text" name="fn" id="" value="<?php echo $row['first_name']?>">
        <label>last name</label>
        <input type="text" name="ln" id="" value="<?php echo $row['first_name']?>">
        <label>gender</label>
        <label>Male</label>
        <input type="radio" name="gender" id="" value="Male" <?php echo ($row['gender'] == "Male")?'checked':'';?>>
        <label>Female</label>
        <input type="radio" name="gender" id="" value="Female" <?php echo ($row['gender'] == "Female")?'checked':'';?>>
        <input type="submit" value="delete" name="deleteStudent">
    </form>
</body>
</html>