<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<style>
     *{
          margin: 0;
          padding: 0;
          box-sizing:border-box;
     }
     .container{
          max-width: 60%;
          background-color: rgb(134, 231, 131);
          margin:auto;
          padding: 23px;
     }
</style>
<body>
     <div class="container">
          <h1>Lets learn about PHP</h1>
          <p>Your party status is here:</p>
          <?php
          $age=34;
          if($age>18){
               echo "<br>";
               echo "You can go to party";
          }
          else{
               "you cannot go to party";
          }
           ?>
          <?php
          echo "<br>";
      $languages = array("Python","C++","php","Nodes");
      echo $languages[0];



      #loops in PHP
      $a=0;
      while ($a <= 10) {
          echo "<br>The value of a is: ";
          echo $a;
          $a++;
      }
          echo "<br>";
      for( $a=0;  $a < count($languages) ;$a++){
           echo "<br> The languages which I like is :";
           echo  $languages[$a];
      }
        foreach( $languages as $value){
             echo " <br>The value from foreach is :";
             echo $value;
        }

      # Funtion in PHP

       function print5(){
          echo " <br>FIVE";
       }
        print5();
        print5();
        print5();
        print5();

     function print_number($nav){
          echo " <br>Your number is :";
          echo $nav;
     }
     print_number(45);
     print_number(45);
     print_number(45);





           ?>

     </div>
</body>
</html>





