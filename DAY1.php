<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        echo "Q1.";
            echo "#OPERATORS"."<br>";
            echo "> Arithmetic Operators: +, -, *, /, %"."<br><br>";
            echo "> Assignment Operators: =, +=, -=, *=, /="."<br><br>";
            echo "> Comparison Operators: ==, ===, !=, !==, <, >, <=, >="."<br><br>";
            echo "> Logical Operators: &&, ||, !"."<br><br>";
        
        
        echo "Q2."."<br><br>";
            $First_name = "Sangam ";
            $Last_name = "Sachdeva ";

            //a.Concatenation
            $Full_name = $First_name." ".$Last_name;
            echo $Full_name."<br>";

            //b.String Length
            echo strlen($Full_name)."<br>";

            //c.Substring Extraction
            echo substr($Full_name,0,3)."<br>";

            //d.Case Conversions -- all four types            
            
                //strtoupper
                echo strtoupper($Full_name)."<br>";
                //strtolower
                echo strtolower($Full_name)."<br>";
                //ucfirst
                echo ucfirst(strtolower($Full_name))."<br>";
                //ucwords
                echo ucwords("$Full_name")."<br>";

            //e.Trimming -- all three types

                //Trim
                echo trim($Full_name)."<br>";

                //Ltrim                                                                                                                                                               
                echo ltrim($Full_name,"Sangam ")."<br>";

                //Rtrim
                echo rtrim($Full_name,"Sachdeva ")."<br>";
            //f.Reverses a string
            echo strrev($Full_name)."<br>";

            //g.Compare two strings (case sensitive)
            $first1 = "Sangam";
            echo strcmp($First_name ,$first1)."<br>";

            //h.Compares two strings (case insensitive)
            echo strcasecmp($First_name ,$first1)."<br><br>";

        echo"Q3."."<br><br>";
            //a.Arithmatic Operations(+,-,*,/,%)

            $num1 = 10;

            $num2 = 5;
            //+
            echo "10 + 5 = ".$num1+$num2."<br>";                                                                                                                                                                                                                                                                                                                                                            //MADE BY RAJ
            //-
            echo "10 - 5 = ".$num1-$num2."<br>";
            //*
            echo "10 * 5 = ".$num1*$num2."<br>";
            //(/)
            echo "10 / 5 = ".$num1/$num2."<br>";
            //%
            echo "10 % 5 = ".$num1%$num2."<br>";

            //b.Rounds up to the nearest integer
            $num3 = 5.4;
            echo "Rounded up $num3: ".ceil($num3)."<br>";

            //c.Rounds down to the nearest integer
            echo "Rounded down $num3: ".floor($num3)."<br>";

            //d.Returns the square root
            echo "Square root of 4: ".sqrt(4)."<br>";

            //e.Generates a random number betwn $min & $max
            $min = 1;
            $max = 1000;
            echo "Random number Between 1 & 1000: ".rand($min,$max)."<br>";                                                                                                                                                                                                                                                                                                                                  //MADE BY RAJ                                                                                                                                                                                          
                                                                                                                                                                                                                                                                                                            
            //f.Checks if value numeric or not
            $val1 = 10;
            $val2 = "ten";
            echo "Value ($val1) is:".is_numeric($val1)."<br>";                                                                                                                                                                                                                          
            echo "Value ($val2) is:".is_numeric($val2)."<br>";
            

            
    ?>  
    
</body>
</html>