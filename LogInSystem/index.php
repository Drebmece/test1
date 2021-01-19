<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include_once("connection/connection.php");
    $con = connection();

    if(isset($_POST['login'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from user_account where user_id='$username' and user_pass='$password'";
        $user = $con->query($sql) or die ($con->error);
        $row = $user->fetch_assoc();
        $total_user = $user->num_rows;

        if($total_user > 0){
            $_SESSION['user'] = $row['user_id'];
            $_SESSION['access'] = $row['user_pass'];
            //echo $_SESSION['access'];
            //echo header("location : home.php");
            echo  header("location:home.php");
        }else{
            echo "id and password not match";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>
<body>
    <h1>Welcome to my Log In Page</h1>
    <?php
    
    ?>
    <form action="" method="post">
        <label>username:</label><input type="text" name="user" id="">
        <label>password:</label><input type="text" name="pass">
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>