<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server, $username, $password);
if(!$con){
  die("failed".mysqli_connect_error());
}
//echo "connected succesfully"
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$car_reg_number = $_POST['car_reg_number'];
$email = $_POST['email'];
$aadhar=$_POST['aadhar'];


$sql="INSERT INTO `register`.`new_register` ( `Name`, `Phone_number`, `car_reg_number`, `email`, `aadhar`,`date`) VALUES ( '$name', '$phone_number', '$car_reg_number', '$email','$aadhar',current_timestamp());";
//echo $sql;
if($con->query($sql) == true){
  //echo "succesgully created";
  $insert=true;
}
else{
  //echo "there is error:";
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
    <title>registration site</title>
    <link rel="stylesheet" href="style.css">
    
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
        <h1>Welcome to Registration Form</h1>
        <h4>Enter Details </h4>
        <?php
        if($insert==true){
        echo "<br><br><hr><p  class='p' style='color : red'><b>Thanks for the Registration</b></p><hr>";
                }
        ?>
        <form action="registeration.php" method="post"><br><br>
            <p class="text">Name</p>
            <input type="text" name="name" id="name" placeholder="name" >
            <p class="text">Phone Number</p>
            <input type="phone" name="phone_number" id="number" placeholder="number" min="1000000000" max="999999999">
            <p class="text">Car Reg Number</p>
            <input type="varchar" name="car_reg_number" id="regnumber" placeholder="regnumber">
            <p class="text">Email</p>
            <input type="email" name="email" id="mail" placeholder="mail">
            <p class="text">Aadhar Card Number</p>
            <input type="number" name="aadhar" id="aadhar" placeholder="aadhar number" min="100000000000" max="999999999999">
            <!--<p class="text">proof of ownership</p>
            <input type="image" name="owner" id="image" placeholder="ownership">-->
            
            <button class="btn">submit</button>&emsp;
           <!-- <button class="btn">reset</button>-->
        </form>
    </div>
    <script src="ind.js"></script>
    <!--INSERT INTO `new register` (`Sr.no`, `Name`, `phone number`, `car reg number`, `email`, `date`) VALUES ('1', 'rahul', '9865743289', 'GJ21ds4455', 'hytrddrh@gmai.com', current_timestamp());-->
</body>
</html>

