<?php
$server="localhost";
$username="root";
$password="";
$db="register";
$con=mysqli_connect($server, $username, $password,$db);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM new_register");
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
p{
    
  text-align: center; 
  font-size: 23px;
  font-family: 'Josefin Sans', sans-serif;
}
</style>";
echo"<p>list of details of peopl applying for registeration of vehicle</p>";
echo "<table border='1'>
<tr>
<th>name</th>
<th>phone_number</th>
<th>email</th>
<th>aadhar</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['phone_number'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['aadhar'] . "</td>";
echo "<td>" . $row['date'] . "</td>";


echo "</tr>";
}
echo "</table>";
echo"<br><br><br><p>click <a href='login.php'><button >logout</button></a>  to logout</p>";

mysqli_close($con);
?>