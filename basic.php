<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Tutorial</title>
</head>
<body>
     <div class="container">
          this is my first php website
          <?php
           
           echo "Hello world and this is printed using php";
           echo "<br>";
          //    Secret algorithm

          // Varibales in PHP

          $variable1=34;
          $variable2=45;
          echo $variable1;
          echo $variable2;
          echo $variable1+$variable2;

          // Operators in PHP
          // Arithmetic Operators
          echo "<br>";
          echo "The Value of variable1 + variable2 is";
          echo $variable1 + $variable2;
          echo "<br>";
          echo "The Value of variable1 - variable2 is";
          echo $variable1 - $variable2;
          echo "<br>";
          echo "The Value of variable1 / variable2 is";
          echo $variable1 / $variable2;
          echo "<br>";
          echo "The Value of variable1 * variable2 is";
          echo $variable1 * $variable2;
     
          // Assignment Operators

       echo "<br>";
       $newvar=$variable1;
       echo "The value of new variable is";
       echo $newvar;



          // Comparison Operators
          echo "<h1> Comparison Operators </h1>";
       echo "the value of 1==4 is";
        echo var_dump(1==4) ;
       
       
        // Increment/Decrement Operators
        echo $variable1++;
        echo $variable1;
           

          // Logical Operators
          // and($$)
          // or(||)
          // not(!)
          echo "<br>";
        $myver1 = (false) and (false);
        echo var_dump($myver1)  ;
         ?>
         <?php
         






         ?>
     </div>
</body>
</html>