<?php
$insert=false;
if(isset($_POST['State'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username, $password);
if(!$con){
  die("failed".mysqli_connect_error());
}

//echo "connected succesfully";
$State = $_POST['State'];
$RTO_District = $_POST['RTO_District'];
$Type_of_Vehicle= $_POST['Type_of_Vehicle'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Middle_Name=$_POST['Middle_Name'];
$Date_of_Birth=$_POST['Date_of_Birth'];
$Birth_Place=$_POST['Birth_Place'];
$Blood_Group=$_POST['Blood_Group'];
$Qualification=$_POST['Qualification'];
$Work=$_POST['Work'];
$Gender=$_POST['Gender'];
$Mobile_Number=$_POST['Mobile_Number'];
$Email=$_POST['Email'];
$District=$_POST['District'];
$Taluka=$_POST['Taluka'];
$Village=$_POST['Village'];
$Pin_Code=$_POST['Pin_Code'];
$Address=$_POST['Address'];

$sql="INSERT INTO `driving`.`drv_license` ( `State`, `RTO_District`, `Type_of_Vehicle`, `First_Name`, `Last_Name`,`Middle_Name`,`Date_of_Birth`,`Birth_Place`,`Blood_Group`,`Qualification`,`Work`,`Gender`,`Mobile_Number`,`Email`,`District`,`Taluka`,`Village`,`Pin_code`,`Address`,`date`) VALUES ( '$State', '$RTO_District', '$Type_of_Vehicle', '$First_Name','$Last_Name','$Middle_name','$Date_of_Birth','$Birth_Place','$Blood_Group','$Qualification','$Work','$Gender','$Mobile_number','$email','$District','$Taluka','$Village','$Pin_code','$Address', current_timestamp());";
//echo $sql;
if($con->query($sql) == true){
  //echo "succesgully created";
  $insert=true;
}
else{
  echo "there is error:";
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
    <title>DLRegistration</title>
</head>
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="css2.css">
<link rel="stylesheet" href="css3.css">
<body>
    <div>
    <div class="main">
    <?php
    
        if($insert==true){
        echo "<p  >thanks for the registration</p>";
                }
        ?>
        <div id="heading">Permanent Driving License Application</div>
    <div>
        <div id="location">
            <p id="head1">Required Information</p><hr>
            <form class="reqinfo" action="driving.php" method="post">
        <div id="state" >
                State  &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="opt" name="State" placeholder="State">    
              
        </div>
        <div id="district" >
            RTO District*
        <input type="text" id="opt" name="RTO_District" placeholder="RTO District">
            
        
    </div>
    <div id="tov" >
    Type of Vehicle*
    <input type="text" name="Type_of_Vehicle" id="opt" placeholder="type of vehicle">
    
</div>
            
        </div>
    </div>


    <div>
        <div id="persinfo">
            <p id="head2">Personal info</p><hr>
            
        <div class="fname">
                First Name
    <input type="text" name="First_Name" id="myname" placeholder="First Name">
        </div>
        <div class="lname">
            Last Name
        <input type="text" id="lastname" name="Last_Name" placeholder="Last Name">
    </div>
    <div class="mname">
        Middle Name
    <input type="text" id="middname" name="Middle_Name" placeholder="Middle Name">
</div>
<div class="dob">
    Date of Birth
<input type="date" name="Date_of_Birth" id="bd" placeholder="--/--/----">
</div>
<div class="pob">
    Birth Place
<input type="text" name="Birth_Place" id="birthp">
</div>
<div class="bg" >
    Blood Group
    <input type="text" name="Blood_group" id="opt2" placeholder="Blood group">
 
</div>
<div class="qual">
    Qualification
<input type="text" name="Qualification" id="qualify" placeholder="B.Com">
</div>
<div class="job">
    Work
<input type="text" name="Work" id="work" placeholder="Job">
</div>
<div class="gen" >
    Gender
    <input type="text" name="Gender" id="opt2" placeholder="Gender"> 
     
</div>
<div class="mono">
    Mobile Number
<input type="tel" name="Mobile_Number" id="mobile">
</div>
<div class="eid">
    Email
<input type="email" id="emd" name="Email" placeholder="abc@yahoo.com">
</div>
            
        </div>

    </div>
    <div>
        <div id="add" >
            <p id="head3">Address</p><hr>
           
        <div class="dist" >
            District*
        <input type="text" name="District" id="District" placeholder="District">
        
    </div>
    <div class="taluka">
        Taluka
    <input type="text" name="Taluka" id="tal" placeholder="Taluka">
    </div>
    <div class="village">
        Village
    <input type="text" name="Village" id="vil" placeholder="Village">
    </div>
    <div class="pin">
        Pin Code
    <input type="tel" id="Pin_code" name="Pin_code" placeholder="340003">
    </div>
    <div class="takeadd">
        Address
    <textarea id="tadd" name="Address" rows="5" cols="100" maxlength="300"></textarea>
            </div>
    <br><br><br>
    <div>
        <button class="btn">submit</button>&emsp;
            </div>
    </div>
        </div>
        
        </div>
        </form> 
</body>
</html>