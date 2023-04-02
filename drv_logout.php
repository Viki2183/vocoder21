<?php
$server="localhost";
$username="root";
$password="";
$db="driving";
$con=mysqli_connect($server, $username, $password,$db);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM drv_license");
echo"<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;

}
p
{
  text-align: center; 
    font-size: 23px;
    font-family: 'Josefin Sans', sans-serif;
}
</style>";
echo"<p >this is list of details of people applying for driving application</P>";

echo "<table border='1'>
<tr>
<th>Sr.no</th>
<th>State</th>
<th>RTO_District</th>
<th>Type_of_vehicle</th>
<th>First_Name</th>
<th>Last_Name</th>
<th>Middle_Name</th>
<th>Date_of_Birth</th>
<th>Birth_Place</th>
<th>Blood_Group</th>
<th>Qualification</th>
<th>Work</th>
<th>Gender</th>
<th>Mobile_Number</th>
<th>Email</th>
<th>District</th>
<th>Taluka</th>
<th>Village</th>
<th>Pin_code</th>
<th>Address</th>
<th>Date</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Sr.no'] . "</td>";
echo "<td>" . $row['State'] . "</td>";
echo "<td>" . $row['RTO_District'] . "</td>";
echo "<td>" . $row['Type_of_Vehicle'] . "</td>";
echo "<td>" . $row['First_Name'] . "</td>";
echo "<td>" . $row['Last_Name'] . "</td>";
echo "<td>" . $row['Middle_Name'] . "</td>";
echo "<td>" . $row['Date_of_Birth'] . "</td>";
echo "<td>" . $row['Birth_Place'] . "</td>";
echo "<td>" . $row['Blood_Group'] . "</td>";
echo "<td>" . $row['Qualification'] . "</td>";
echo "<td>" . $row['Work'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['Mobile_Number'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['District'] . "</td>";
echo "<td>" . $row['Taluka'] . "</td>";
echo "<td>" . $row['Village'] . "</td>";
echo "<td>" . $row['Pin_Code'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";

echo "</tr>";
}
echo "</table>";
echo"<br><br><br><p>click <a href='login.php'><button>logout</button></a>  to logout</p>";

mysqli_close($con);
?>