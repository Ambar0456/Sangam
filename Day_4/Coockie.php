<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

<?php

//set a Cookie
$cookieName ='langpreferences';
$cookieValue='French';
$cookieExpire = time() + (180);

setcookie($cookieName,$cookieValue,$cookieExpire,"/");

echo "Coockie has been Sent...!";

//Accessing the Cookie 

if(isset($_COOKIE[$cookieName])){

    echo "<br> Your Language is Preference is: ".$_COOKIE[$cookieName];

}else{

    echo "<br>Cookie is not Set...! ";
}

//Deleting the Cookie

        setcookie($cookieName,$cookieValue, time()-(30), "/");

        echo "<br> Cookie has Been Deleted...!";

?>

</body>
</html>