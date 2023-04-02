<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .final{
      border:solid black 2px;
      width: 35%;
      margin:  7% 30%;
      padding: 2% 5% 2% 5%;
      background-color:#cbade4;
      
    }
    #ddata,#nvdata{
        font-size: large;
        margin:  0 10%;
        text-align: center;
    }
   
    
#btn1,#btn2{
    color: aliceblue;
    background-color: rgb(93 79 230);
    border: 1px solid black;
    border-radius: 10px;
    margin:5% 30% 1%;
    padding: 5px 0px;
    width: 100px;
    font-size: 15px;
    cursor: pointer;
}
#btn2{
  width:40%;
  padding: 5px 0px;
}
body{
background-image: url("rto11.jpg");
background-repeat: no-repeat;
background-size: 100%;
}
  </style>
</head>

<body>
  <div class="final">
    <div id="ddata">
  Click down for Driving License Database
  <a href="drv_logout.php" ><button id="btn1">Driving</button></a>
</div>
<hr color="red">
  <div id="nvdata">
  Click down for New Vehicle Registration Database
  <a href="new_reeg.php"><button id="btn2">Vehicle registration</button></a>
</div>
</div>
</body>
</html>