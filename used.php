<?php
$insert=false;
$server="localhost";
$username="root";
$password="";
$db="register";
$con=mysqli_connect($server, $username, $password,$db);

if(!$con){
  die("failed".mysqli_connect_error());
}
//echo "connected succesfully"


if(isset($_POST['name']))
{

  $name = $_POST['name'];
  $phone_number = $_POST['phone_number'];
  $car_reg_number = $_POST['car_reg_number'];
  $email = $_POST['email'];
  $aadhar=$_POST['aadhar'];
$sql="UPDATE `new_register`SET name='$name',phone_number='$phone_number',email='$email',aadhar='$aadhar' where car_reg_number ='$car_reg_number' ";

if($con->query($sql) == true){
  //echo "succesgully created";
  $insert=true;
}
else
{
  echo"not updated";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>used vehicle</title>
    <link rel="stylesheet" href="style1.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
</head>
<body >
    <img class ="bg" src="TY05-RTO.jpg" alt="rto office">
    <div class="container" style="background-color: beige;">
        <h1>Welcome to registration form</h1><br>
        <h1>for the change in the ownership of  used vehicles</h1>
        <h4>enter registration number of previous vehicle to change the other data </h4>
        <?php
        if($insert==true){
        echo "<p  class='text'><center>thanks for the change</center></p>";
                }
        ?>
        <form action="used.php" method="post"><br><br>
            <p class="text">name</p>
            <input type="text" name="name" id="name" placeholder="name" >
            <p class="text">Phone number</p>
            <input type="phone" name="phone_number" id="number" placeholder="number" min="1000000000" max="999999999">
           
            <p class="text">Car registeration number</p>
            <input type="varchar" name="car_reg_number" id="regnumber" placeholder="regnumber">
            <p class="text">email</p>
            <input type="email" name="email" id="mail" placeholder="mail">
           
            <p class="text">aadhar card number</p>
            <input type="number" name="aadhar" id="aadhar" placeholder="aadhar number" min="100000000000" max="999999999999">
           
        
            <button class="btn">submit</button>&emsp;
           <!-- <button class="btn">reset</button>-->
        </form>
    </div>
    <script src="ind.js"></script>
    <!--INSERT INTO `new register` (`Sr.no`, `Name`, `phone number`, `car reg number`, `email`, `date`) VALUES ('1', 'rahul', '9865743289', 'GJ21ds4455', 'hytrddrh@gmai.com', current_timestamp());-->
</body>
</html>
