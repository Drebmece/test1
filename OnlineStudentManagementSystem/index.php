<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include_once("connection/connection.php");
    $con = connection();


    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from user where username='$username' and password='$password'";
        $user= $con->query($sql) or die($con->error);
        $row = $user->fetch_assoc();
        $total_user = $user->num_rows;
        
        if($total_user > 0 && $total_user < 2){
            $_SESSION['user'] = $row['username'];
            $_SESSION['access'] = $row['access_id'];
            $_SESSION['id'] = $row['id'];
            echo header("location:home.php");
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <div class="login-box">
    <h1>Online Student Management System</h1>
    <form action="" method="post">
        <div class="textbox">
            <input type="text" placeholder="Username" name="username">
        </div>

        <div class="textbox">
            <input type="password" placeholder="Password" name="password">
        </div>

    <input class="btn" type="submit" name="login" value="Sign In">
    </form>
    </div>

</body>
</html>