<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            echo"Current :". $_SERVER['PHP_SELF']."<br>";
         echo " Server Name:".$_SERVER['SERVER_NAME']. "<br>";  
         echo "Client IP :".$_SERVER['REMOTE_ADDR']. "<br>";  
         echo "REQUESTED METHOD :".$_SERVER['REQUEST_METHOD']. "<br>";  
      

    ?>
</body>
</html>