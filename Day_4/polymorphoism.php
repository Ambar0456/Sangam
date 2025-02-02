<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //polymorphism
    class Shape{
        public function calculateArea(){
            return "area not Defined";
   
        }
    }


    class Circle extends shape{
        public $radius;
        public function calculateArea(){
            return 3.14 * ($this->radius *$this->radius);
            
        }

    }
    class rectangle extends shape{
        public $length;
        public $width ;
           public function calculateArea(){
            return $this->length * $this->width;
           }
            
        }

        $circle = new Circle();
        $circle->radius = 5;
        echo "Circle Area :". $circle->calculateArea()."<br>";

        $rect= new rectangle();
         $rect->length = 5;
         $rect->width = 10;
        echo "Rectangle Area :". $rect->calculateArea()."<br>";


    ?>

    
</body>
</html>
