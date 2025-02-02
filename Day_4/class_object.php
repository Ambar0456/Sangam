<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class & Object </title>
</head>
<body>
    <?php
    //classes and Objects
     class car{
        public $brand;
 
    //private
    //protected

    public function startEngine(){
        return " The Engine is Starting...!";
        }
     }

     //creates an object
     $car = new car();
     $car->brand = "lamborghini";
     $car->color = "Yellow";

     echo " Car Brand: ". $car->brand. "<br>";
     echo $car->startEngine();
    ?>
</body>
</html>