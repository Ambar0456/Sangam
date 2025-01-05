<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first</title>

</head>
<body>

    <?php
            

           echo "Hello System ";
          
            $name = "Sangam";
            $age = 27;
            $time = 14.45;
            $class = true;

            $student_arr = array("Junaid,Raj,Sangam");

                class student{
                    public $marks;
                }
                $stud = new student();
                $stud->marks = 90;
              
            $null_var = null;

        echo "<br> string:" ,$name;
        echo "<br> Integer:",$age;
        echo "<br> Float:"   , $time;
        echo "<br> Boolean:", $class;

            echo " <br>Array :",$student_arr[0];
        
        echo" <br>Null: ",$null_var;     
           
        ?>

</body>
</html>