<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_SESSION['access'])){
        echo $_SESSION['access'];
    }else{
        echo "not set";
    }
    
    include_once("connection/connection.php");
    $con = connection();

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
    <h1>welcome to home page</h1>

    
    im a <?php echo $_SESSION['access'];?>
    <a href="index.php">back to index</a>
    <a href="logout.php">log out</a>

</body>
</html>