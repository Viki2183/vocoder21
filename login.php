
<?php


if(isset($_POST['ID'])){
    $server="localhost";
    $username="root";
    $password="";
    $db="admin";
    $con=mysqli_connect($server, $username, $password,$db);
    if(!$con){
        die("failed".mysqli_connect_error());
      }
      $showSAlert=false;
    $ID=$_POST['ID'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select*from log_ced where ID='$ID'AND email='$email' AND password='$password'limit 10";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        header("Location: logout.php");
        exit();
    }
    else{
        echo "wrong credentials entered";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
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
            background-color:#67f5f5;
             border: 2px solid black;
             border-radius: 10px;
             padding: 5px 0px;
             width: 170%;
             font-size: 15px;
             cursor: pointer;
             text-align:center;
             color: black;
             display: flex;
             justify-content: space-evenly;
             font-family: 'Josefin Sans', sans-serif;
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
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    
}
.container
{
    background-color:#e8e896;
    max-width: 50%;
    margin:  5% 30%;
      padding: 2% 5% 2% 5%;
    border: solid black;
    
  
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
    background-image:url("rto6.jpg");
    background-repeat: no-repeat;
background-size: 100%;
}

    </style>
</head>
<body>
<div class="container" >
    <form action="login.php" method="post" action="#">
    
   
    <h1> Admin Login</h1>
    <hr style="width:100% ">
   <p class="text"><b>ID:</b> </p>
   <input type="number" name="ID" placeholder="ENTER ID" id="id"   required> </input> 
   <p class="text"><b>E-mail</b> </p>
   <input type="email" name="email" placeholder="abc@yahoo.com" id="in2" name="mail" required> </input> 
   <p class="text"><b>Password</b> </p>
   <input type="password" id="psw" name="password"></input>
   <a href='login.php'><button class="lgn"><b>Login</b></button></a>

   </div> 
</form>
