<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      //Arrays and Functions
      
      //Array Indexed

      $fruits = ["Banana","Apple","Cherry","kiwi","Grapes"];
      echo "Selected Fruit : ". $fruits[1];

      foreach($fruits as $fruit){

      
      echo "<br> Fruit : ". $fruit;
      }

      //Associative Arrays

      echo"<br>";
      $ages =["John " => 25 , "Raj " => 18 ,"Alice " =>22 ];
      echo "<br> Selected Age :". $ages["Alice "];
      foreach($ages as $name => $age){
        echo "<br> ". $name . "is   " . $age ." Years old.";
      }

      //Multi Dimensional Arrays


      echo "<br>";
      $students=[
        ["John",25,False],
        ["Raj",18,True],
        ["Alice",22, False]
      ];

      echo "<br> Student 1 is Present in the Class :". $students[1][2];
            
      //Array Manipulation
      echo"<br>";
      $classroom =["stuart","Ben","Nick"];
      foreach($classroom as $student){
        echo "<br> Student : " .$student;
          }

          //Adding Student
          echo "<br>";
          $classroom[ ]="Alen";
          array_push($classroom,"Xavier");
          foreach($classroom as $student){
            echo "<br> Student :". $student;
          }

          //Update Elements
          echo "<br>";
          $classroom[2] = "Ambar";
          foreach($classroom as $student){
            echo "<br> Student :". $student;
          }

          //Counting Elements
          echo "<br><br>";
          echo "Number of element in the array are :" . count($classroom);

           //Delete Elements
           unset($classroom[1]);
           print_r($classroom);

           //Re-Indexing Elements
           $classroom = array_values($classroom);
           echo "<br>";
           print_r($classroom);

           
    ?>
</body>
</html>