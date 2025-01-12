<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            //Control Structures
            $name = "Raju ";
            if($name =="Sangam "){
                echo $name."Name is Correct";
            }
            else{
                echo $name."Name is Not Correct <br>";
            }
            //Conditional Statement if and if---else
            $marks = 61;

            if($marks >=80){
                echo "<br> You Got Grade : A";
            }
            elseif($marks>=60){
                echo "<br>You Got Grade : B";  
            }
            elseif($marks>=40){
                echo "<br>You Got Grade : C";  
            }
            else{
                echo" <br><br> You Got Grade : D";
            }


        //Conditional Satement Switch
            echo "<br><br>";

        $day = "Sunday";
        switch($day){
            case "Sunday":
            echo "It's Sunday...!";
            break;

            case "Monday":
            echo "It's Monday...!";
            break;

            case "Tuesday":
            echo "It's Tuesday...!";
            break;


            case "Wednesday":
            echo "It's Wednesday...!";
            break;

            case "Thursday":
            echo "It's Thursday...!";
            break;

            case "Friday":
            echo "It's Friday...!";
            break;

            
            case "Saturday":
            echo "It's Saturday...!";
            break;
            default:
            echo "No Match day found...!";
        }
        
            //Iteratic Control Structures While Loop
            echo "<br><br>";

            $count = 1;
            while($count <= 10){
                echo "<br> Count is ". $count;
                $count++;
            }

             //Iteratic Control Structures Do While Loop
             echo "<br><br>";
             $num = 1;
             do{
                echo "<br> Number is " . $num;
                $num++;
             }
             while($num <= 5);

              //Iteratic Control Structures For Loop
            echo "<br><br>";
            
            for($i=1;$i<=5; $i++){
                echo "<br> For Loop Number : " .$i;

            }

             //Iteratic Control Structures While Loop
             echo "<br><br>";

             $array =["Red","Green","Pink","Blue","Grey"];
             foreach($array as $color){
                echo "<br> Color : ". $color;
             }


?>
</body>
</html>