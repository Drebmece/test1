<?php
    include_once("connection/connection.php");
    $con = connection();

    $id = $_GET['ID'];

    
    $sql2 = "select * from student_list where id='$id'";
    $student = $con->query($sql2) or die ($con->error);
    $row = $student->fetch_assoc();


    if(isset($_POST['updateStudent'])){
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $gender = $_POST['gender'];

        $sql = "update student_list set first_name='$fn',last_name='$ln',gender='$gender' where id ='$id'";
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
    <a href="details.php?ID=<?php echo $id;?>">back to details</a>
    <a href="index.php">back to index</a>
    

    <form action="" method="post">
        <input  type="text" name="ID" id="" value="<?php echo $row['id']?>>
        <label>first name</label>
        <input type="text" name="fn" id="" value="<?php echo $row['first_name']?>">
        <label>last name</label>
        <input type="text" name="ln" id="" value="<?php echo $row['first_name']?>">
        <label>gender</label>
        <label>Male</label>
        <input type="radio" name="gender" id="" value="Male" <?php echo ($row['gender'] == "Male")?'checked':'';?>>
        <label>Female</label>
        <input type="radio" name="gender" id="" value="Female" <?php echo ($row['gender'] == "Female")?'checked':'';?>>
        <input type="submit" value="update student" name="updateStudent">
    
    
    </form>
</body>
</html>