<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions </title>
</head>
<body>
    

<?php

//sessions

session_start();
$_SESSION['username']="John";
$_SESSION['role']="Hacker";

 echo "Sessions has been Created..!<br>";

    //accessing sessinon Variables

    if(isset($_SESSION["username"])){

        echo "Welcome ". $_SESSION["username"];
    }else{
        echo " No Active Session Found...!";
    }

//Destroying/Killing/Terminating the sessions 

session_unset();
session_destroy();
echo "<br> Sessions has been Terminated";
 

if(isset($_SESSION["username"])){

    echo "Welcome ". $_SESSION["username"];
}else{
    echo " <br>No Active Session Found...!";
}
?>
</body>
</html>