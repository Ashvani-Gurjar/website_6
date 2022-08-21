<?php
$insert=false;
if(isset($_POST['name'])){
# Set connection variables
      $server="localhost";
      $username ="root";
      $password ="";
# Create a database connection
    $con =  mysqli_connect($server, $username ,$password);
# Check for connection success
    if(!$con){
         die("Connection to this database failed due to". mysqli_connect_error());
    }
//     echo "Success connectiong to the db";

# Collect post variables
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $desc = $_POST['desc'];
   $sql =" INSERT INTO `us_trip`.`us_trip` ( `name`, `age`, `gender`, `phone`, `email Id`, `other`, `Date`) VALUES ( '$name', '$age', '$gender', '$phone', '$email', '$desc', current_timestamp());";

   // echo $sql;
 
# Execute the query
   if($con->query($sql)== true){
      // echo "Successfully inserted";

#flag for successful insertion
      $insert =true;
   }
   else{
      echo "ERROR: $sql <br> $con->error";
      

   }
# Close the data base connection
   $con->close();

}
?>

<!-- # HTML scorse code -->
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome to Travel Form</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
        <h1>Welcome to IIT kanpur US Trip form </h1>
       <h3>Enter your details and submit this form to confirm your participation in the trip</h3> 

       <!-- To print when form submited -->
       <?php
       if($insert == true){
       echo "<h2 class='submitMsg'>Thanks for submitting your form . We are happy to see you joining us for the US trip</h2>" ; 
      }
       ?>
      

        <form action="index.php" method="post">

          <input type="text" name="name" id="name" placeholder="Enter your name">
          
          <input type="text" name="age" id="age" placeholder="Enter your age">
          <input type="text" name="gender" id="gender" placeholder="Enter your gender">
          <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
          <input type="email" name="email" id="email" placeholder="Enter your email id">
          <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any information here"></textarea>
          <div><button class="btn">Submit</button>
          <!-- <button class="btn">Reset</button></div> -->
          
       
     
     
     
     </form>
   </div>
   <script src="index.js"></script>
  
</body>
</html>