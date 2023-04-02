<?php
$insert=false;
if(isset($_POST['Name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username, $password);
if(!$con){
  die("failed".mysqli_connect_error());
}
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$sql="INSERT INTO `inquiry`.`inquiry_dat` ( `Name`, `Email`, `Message`,`Date`) VALUES ( '$Name', '$Email', '$Message',current_timestamp());";
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
    <title>inquiry</title>
    <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
       h1{
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size:40PX;
            margin:5px 0 5px;
            text-align: center;
       }
               p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size:40PX;
            margin:5px 0 5px;
            text-align: center;
        }
        
        .lgn{
            background-color: #34e288;
             border: 2px solid black;
             border-radius: 10px;
             padding: 5px 5px 5px 5px;
             width: 20%;
             font-size: 15px;
             cursor: pointer;
             margin-left: auto;
             margin-right: auto;
             color: black;
             display: flex;
             justify-content: space-evenly;
        }
        input{
    border: 2px solid black;
    width: 55%;
    padding: 8px;
    outline: none;
    border-radius: 10px;
    font-size: 14px;
    margin: 25px 0px;
}
.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    height: 110%;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.container
{
    max-width: 50%;
    border: solid black;
    margin:  3% 30%;
      padding: 2% 5% 2% 5%;
      background-color:#badedc;

}
input{
    border: 2px solid black;
    width: 55%;
    padding: 8px;
    outline: none;
    border-radius: 10px;
    font-size: 14px;
    margin: 25px 0px;
}
p{
    
    text-align: center; 
    font-size: 23px;
    font-family: 'Josefin Sans', sans-serif;
}
body{
    background-image:url("RTO_inq.jpg");
    background-repeat: no-repeat;
    background-size: 100% 125%;
}

    </style>
</head>
<body>
    <?php
    if($insert==true){
        echo "<br><br><hr><p  class='p' style='color : red'>Thanks for asking</p><hr>";
                }
        ?>
        
        <div class="container" >
         <form action="inquiry.php" method="post" action="#">
   <h1>Inquiry Form</h1>
   <hr style="width:100%">
   <br>
  <p class="text">Name</p> 
    <input type="text" name="Name" placeholder="enter name" id="id"   required> </input>
  <p class="text">E-mail </p>
  <input type="email" name="Email" placeholder="abc@yahoo.com" id="in2" name="mail" required> </input>  
   <p class="text">Message </p> 
    <input  id="psw" name="Message" placeholder="enter message in 200 words"></input>
   <button class="lgn">Send</button>
            </div>
           
</body>
</html>