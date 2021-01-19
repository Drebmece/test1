<?php
        ini_set('display_errors','On');
        error_reporting(E_ALL | E_STRICT | E_DEPRECATED);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $name = "Paul";
        echo("My name is $name<br/>");

        $tax = 0.2;
        $productcost = 34.20;
        $taxcost = $productcost * $tax;
        $cost = $taxcost + $productcost;

        echo("TAX is $taxcost<br/>");
        echo("Total cost is $cost<br/>");
    ?>

    <?php
        $file = $_SERVER['PHP_SELF'];
        $user = $_SERVER['HTTP_USER_AGENT'];
        $address = $_SERVER['REMOTE_ADDR'];

        echo "<p>the current filename is <strong>$file</strong>.</p>";
        echo "<p>the user details are: <strong>$user</strong <br/> with address: <strong>$address</strong></p>";
    ?>

    <?php
        $age = "25";
        $age3 = 3;
        $ageTotal = $age + $age3;
        echo $ageTotal."<br>";

        $age2 = 25;
        $ageTotal2 = $age2 + 2;
        
        echo $ageTotal2;
    ?>

    <?php
        echo ucwords("asdh asda asd ausowq asdo qweo <br>");
        
        $myString = "this script is written by name";
        $myName = "hiroshi carig";
        echo str_replace("name", $myName, $myString)."<br>";
        echo str_replace("world","Peter","Hello world!");
        echo "<br>";
    ?>
    <?php
        $n = 123456789.9876544321;
        echo $n = number_format($n);
        echo "<br>";
    ?>

    <?php
        $salary = 25000;
        $tax = 0.2;
        $deduction = $salary * $tax;
        $deducted = $salary - $deduction;
        echo "your salary tax is $deduction,and your salary is$deducted <br>";

        

        define('USERNAME',"angel");
        echo "hellow " . USERNAME;
    ?>
</body>
</html>