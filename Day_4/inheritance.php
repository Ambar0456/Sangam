<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Inheritence
    class Animal{
        public function MakeSound(){
            return "Some Generic Sound";
        }


    }

    class cat extends Animal{
        public function MakeSound(){
            return "Meow <br>";
        }
    }
    class dog extends Animal{
        public function MakeSound(){
            return "Bark <br>";
        }
    }
    

    $dog = new Dog();
    echo $dog->MakeSound();
    $cat = new cat();
    echo $cat->MakeSound();

    
    ?>
</body>
</html>