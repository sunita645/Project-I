<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
  margin-left: 35%;
}

td, th {
  border: 0px;
  text-align: left;
  color:white;
}
</style>
<table style="text-align:center">
<tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Action</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Id, Username, User_Password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["Id"]."</td>";
    echo "<td>".$row["Username"]."</td>";
    echo "<td>".$row["User_Password"]."</td>";
    echo "<td><a href=\"index.php?Id=$row[Id]\" style=\"color:white\">Edit</a></td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
</table>
